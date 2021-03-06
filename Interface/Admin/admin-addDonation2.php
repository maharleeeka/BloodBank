<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Donation</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="admin-addDonation.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<!-- MENU / HEADER-->
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#" title="Blood Bank">Blood Bank</a></h1>
			<span>Donate now!</span> 
		</div>
		<div id="menu">
			<ul>
				<li><a href="admin-homepage.html" accesskey="1" title="Home">Home</a></li>
				<li><a href="admin-addDonor.html" accesskey="2" title="Add">Add</a></li>
				<li><a href="admin-viewPage.html" accesskey="6" title="View">View</a></li>
				<li><a href="admin-search.html" accesskey="6" title="Search">Search</a><li>
			</ul>
			
		</div>
	</div>
</div>

<!-- MENU / HEADER-->

<!-- BODY -->
<div id="content"> 
	<form name="insert" action="add_donation.php" method="POST" >
		<div id="form-style">
			<input type="hidden" name="idnumber" value= "<?php echo htmlspecialchars($_GET['id']); ?>" />
			<input type="hidden" name="bloodtype" value= "<?php echo htmlspecialchars($_GET['btype']); ?>" />
			<input type="hidden" name="bloodrh" value= "<?php echo htmlspecialchars($_GET['brh']); ?>" />  
			<li><label>Date of Donation: </label></li><li><input type="date" name="date" /></li>
			<li><label>Time of Donation: </label></li><li><input type="time" name="time" /></li>  
			<li><label>Amount (in cc): </label></li><li><input type="number" step="1"  name="amount" /></li>  
			<center><li><input type="submit" /></li></center>
		</div>
</form>  
</div>


</body>
</html>
