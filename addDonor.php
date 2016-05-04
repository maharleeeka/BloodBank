<?php
	$db = pg_connect("host=localhost port=5432 dbname=bloodbank user=postgres password=admin");

	// //add client
	$clienttype = 'true';
	$clientQuery = "INSERT INTO Client (fname, mname, lname, client_type)
					VALUES ('$_POST[fname]', '$_POST[mname]', '$_POST[lname]', '$clienttype')";
	$clientResult = pg_query($clientQuery);


	//add donor
	$idnumber = pg_fetch_result(pg_query("SELECT max (idno) from client"), 0);
	echo($idnumber);
	$age = 19;
	//$age = pg_fetch_result(pg_query("SELECT age (birthday) from Client where (idno = (SELECT max (idno) from Client))"), 0);
	$age = pg_fetch_result(pg_query("SELECT EXTRACT (year from age('$_POST[birthday]'::date))"), 0);

	$rh = '-';
	if($_POST[bloodrh] == "+"){
		$rh = '%2B';
	}

	$donorQuery = "INSERT INTO Donor (idno, houseno, street, barangay, citymun, province, zipcode, ethnicity, bloodrh, bloodtype, birthday, age, weight, height) 
					VALUES ('$idnumber',
							'$_POST[houseno]', 
							'$_POST[street]', 
							'$_POST[barangay]', 
							'$_POST[citymun]', 
							'$_POST[province]', 
							'$_POST[zipcode]',
							'$_POST[ethnicity]', 
							'$rh', 
							'$_POST[bloodtype]', 
							'$_POST[birthday]',
							'$age', 
							'$_POST[weight]', 
							'$_POST[height]')";
	$donorResult = pg_query($donorQuery);

	// $age = "SELECT age (birthday) from Client where (idno = (SELECT max (idno) from Client))";

	
	if($donorResult){
		header("Location: add_donationform.php?id=$idnumber&btype=$_POST[bloodtype]&brh=$rh");
		exit();
	}
	else{
		echo intval($id);
		echo pg_last_error($db);
		// header("Location: addDonor.html");
		exit();
	}	

?>
