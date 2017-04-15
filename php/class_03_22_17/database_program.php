<?php

// use the mysqli_connect function to
// connect to the database server program
// whose name is mysql1308.ixwebhosting.com
// give it username of housato_cst258
// and a password of Spring2010;
// store the connection object that mysqli_connect returns in
// a memory location whose name you make up ($conn)


$conn = mysqli_connect("mysql1308.ixwebhosting.com", "housato_cst258","Spring2010");

// use the mysqli_select_db function to connect to the housato_school
// datgabase and store that information in the connection 
// object.

mysqli_select_db($conn, "housato_school");

// create and store in a memory location (make up a name)
// a SQL select statement that will tell the computer 
// what table of information you want from the database

$sql_statement = "SELECT s.last_name AS student_last_name, s.first_name AS student_first_name, s.phone AS student_phone 
                  FROM student AS s 
		  ORDER BY s.last_name ASC, s.first_name ASC;";
$sql_statement = "SELECT s.last_name AS student_last_name, s.first_name AS student_first_name, s.city AS student_city
       FROM student AS s ";
	   
	      
foreach ($_REQUEST['cities'] as $key => $val) {
	if ($key == 0) {
		$sql_statement  = $sql_statement."WHERE s.city = '$val' ";
	}
	else {
		$sql_statement  = $sql_statement."OR s.city = '$val' ";
	}
}
$sql_statement = $sql_statement." order by s.city;";

// Call the mysqli_query function and pass it the sql select
// that you want to run and the connection information about
// the database that you are connected to; mysqli_query will
// return to you a table of information; store that information
// in a memory location whose name you make up ($result_table)

$result_table = mysqli_query($conn, $sql_statement) or 
                die(mysqli_error());


// Now that we have gotten all the information we want from the database
// we should use the mysqli_close function to close the database.				

mysqli_close($conn);

// Now the table of information that you want to print out
// is in the memory location whose name you made up ($result_table). 
// Next what needs to be done is print this out as an HTML table

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Student phone Book</title>
<style type="text/css">
#phone_book_table {
   width:100%;
   border: 2px solid black;
}

#phone_book_table th, #phone_book_table td {
   border: 2px solid black;
}

</style>
</head>
<body>
<table id="phone_book_table">
   <tr>
      <th>Last Name</th>
      <th>First Name</th>
      <th>City</th>
   </tr>

<?php
   while ($row = mysqli_fetch_array($result_table)) {
      echo "<tr>";
      echo "<td>";
      echo $row["student_last_name"];
      echo "</td>";
      echo "<td>";
      echo $row["student_first_name"];
      echo "</td>";
      echo "<td>";
      echo $row["student_city"];
      echo "</td>";
      echo"</tr>";
   }
?>

</table>
</body>
</html>
