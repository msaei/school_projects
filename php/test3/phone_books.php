<?php
if (!isset($_REQUEST["phone_book_type"])) {
	exit('Incorrect input!');
}

$tableName = $_REQUEST["phone_book_type"];



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

// prints last_name first_name and city for student in every city selected on cities select element 

$select_clause = "SELECT t.last_name AS last_name, t.first_name AS first_name, t.phone AS phone_number ";
$from_clause = "FROM $tableName AS t ";
$order_by_clause = "ORDER BY t.last_name ";
$where_clause = " ";


$sql_statement = "$select_clause $from_clause $where_clause $order_by_clause;";



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
<title>Phone Book</title>
<style type="text/css">
#table {
   width:100%;
    border-collapse: collapse;
   border: 2px solid black;
}

#table th, #table td {
   border: 2px solid black;
}

</style>
</head>
<body>
<?php 
if ($tableName == "faculty") {
	echo "<h2>Faculty Phone Book</h2>";
} else {
	echo "<h2>Student Phone Book</h2>";
}
?>
<table id="table">
   <tr>
      <th>Last Name</th>
      <th>First Name</th>
	  <th>Phone</th>
   </tr>

<?php
   while ($row = mysqli_fetch_array($result_table)) {
      echo "<tr>";
	  echo "<td>";
      echo $row["last_name"];
      echo "</td>";
      echo "<td>";
      echo $row["first_name"];
      echo "</td>";
	  echo "<td>";
      echo $row["phone_number"];
      echo "</td>";
      echo"</tr>";
   }
?>

</table>
</body>
</html>