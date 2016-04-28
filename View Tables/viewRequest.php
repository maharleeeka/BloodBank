<?php
$db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123");

   $sql =<<<EOF
      SELECT * FROM Request;
EOF;

   $clients = pg_query($db, $sql);
?>

<!DOCTYPE html>  
   <head> 
   <title>View Request</title>  
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
   <style>  
      li {
         listt-style: none;
      }
   </style>  
   </head>  
   <body>  
   <table width="600" border="2" cellspacing="1" cellpadding="1">
      <tr>
         <th>Status</th>
         <th>Request No</th>
         <th>Illness</th>
         <th>First Name</th>
         <th>Middle Name</th>
         <th>Last Name</th>
         <th>Date</th>
         <th>Time</th>
         <th>Date Needed</th>
         <th>Amount</th>
         <th>Tracking Number</th>
         <th>ID Number</th>
      </tr>
   

<?php
   if(!$clients){
      echo pg_last_error($db);
      exit;
   } 
   while($records = pg_fetch_assoc($clients)){
      echo "<tr>";
      echo "<td>" . $records['status'] . "</td>";
      echo "<td>" . $records['request no'] . "</td>";
      echo "<td>" . $records['illness'] . "</td>";
      echo "<td>" . $records['fname'] . "</td>";
      echo "<td>" . $records['mname'] . "</td>";
      echo "<td>" . $records['lname'] . "</td>";
      echo "<td>" . $records['date'] . "</td>";
      echo "<td>" . $records['time'] . "</td>";
      echo "<td>" . $records['date needed'] . "</td>";
      echo "<td>" . $records['amount'] . "</td>";
      echo "<td>" . $records['tracking number'] . "</td>";
      echo "<td>" . $records['id number'] . "</td>";
      echo "</tr>";
      echo "<br>";
   }
   pg_close($db);
$result = pg_query($query);   
?>

</table>

</body>
</html>