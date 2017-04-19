<?php
session_start();

// check to see if all the session variables exist, and if not, set them

if (!isset($_SESSION["firstname"])) {
   $_SESSION["firstname"] = "";
}

if (!isset($_SESSION["lastname"])) {
   $_SESSION["lastname"] = "";
}

if (!isset($_SESSION["shirts"])) {
   $_SESSION["shirts"] = 0;
}

if (!isset($_SESSION["pants"])) {
   $_SESSION["pants"] = 0;
}

if (!isset($_SESSION["shoes"])) {
   $_SESSION["shoes"] = 0;
}

if (!isset($_SESSION["socks"])) {
   $_SESSION["socks"] = 0;
}



// check to see if there are variables in the $_REQUEST array, 
// and if so use them to update the $_SESSION variables.
// Be sure to check if numbers are numeric

if (isset($_REQUEST["shirts"]) && is_numeric(trim($_REQUEST["shirts"]))) {
   $_SESSION['shirts'] = $_SESSION['shirts'] + trim($_REQUEST['shirts']);
}

if (isset($_REQUEST["pants"]) && is_numeric(trim($_REQUEST["pants"]))) {
   $_SESSION['pants'] = $_SESSION['pants'] + trim($_REQUEST['pants']);
}

if (isset($_REQUEST["shoes"]) && is_numeric(trim($_REQUEST["shoes"]))) {
   $_SESSION['shoes'] = $_SESSION['shoes'] + trim($_REQUEST['shoes']);
}

if (isset($_REQUEST["socks"]) && is_numeric(trim($_REQUEST["socks"]))) {
   $_SESSION['socks'] = $_SESSION['socks'] + trim($_REQUEST['socks']);
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Shopping Cart</title>
<style type="text/css">
table {
   width:100%;
    border-collapse: collapse;
   border: 2px solid black;
}

th, td {
   border: 2px solid black;
}

</style>
</head>
<body>
<h2>Personal Information</h2>



<form action="order_page.php" method="post" >
First Name <input type="text" name = "firstname" 
            value="<?php echo $_SESSION['firstname'] ?>" /><br />
Last Name <input type="text" name = "lastname" 
            value="<?php echo $_SESSION['lastname'] ?>" /> <br />
<input type="submit" value="Go to the Order Page"> <br />
</form>				

<h2>Your Current Order is:</h2>
<table>
   <tr>
	  <th>Item</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Amount</th>
   </tr>
   <tr>
	  <td>shirts</td>
	  <td><?php echo $_SESSION['shirts'] ?></td>
	  <td>$20</td>
	  <td>$<?php echo ($_SESSION['shirts'])*20 ?></td> 
   </tr>
   <tr>
		<td>pants</td>
		<td><?php echo $_SESSION['pants'] ?></td>
		<td>$15</td>
		<td>$<?php echo ($_SESSION['pants'])*15 ?></td>
   </tr>
   <tr>
		<td>shoes</td>
		<td><?php echo $_SESSION['shoes'] ?></td>
		<td>$30</td>
		<td>$<?php echo ($_SESSION['shoes'])*30 ?></td>
   </tr>
   <tr>
		<td>socks</td>
		<td><?php echo $_SESSION['socks'] ?></td>
		<td>$5</td>
		<td>$<?php echo ($_SESSION['socks'])*5 ?></td>
   </tr>
</table>
<?php  
$total = ($_SESSION['shirts'])*20 ;
$total += ($_SESSION['pants'])*15 ;
$total += ($_SESSION['shoes'])*30 ;
$total += ($_SESSION['socks'])*5;
?>
<h3> The total amount of your order is: $<?php echo $total  ?></h3>

</body>
</html>

