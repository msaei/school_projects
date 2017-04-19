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

if (isset($_REQUEST["firstname"])) {
   $_SESSION["firstname"] = trim($_REQUEST["firstname"]);
}

if (isset($_REQUEST["lastname"])) {
   $_SESSION["lastname"] = trim($_REQUEST["lastname"]);
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Order Item</title>
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
<h2>Order Page</h2>
		<p> <?php echo "Hi ".$_SESSION['firstname'] ." " .$_SESSION['lastname'] ?> </p>

<p> this is what your ordered so far</P>
<p> shirts: <?php echo $_SESSION['shirts'] ?> </p>
<p> pants: <?php echo $_SESSION['pants'] ?> </p>
<p> shoes: <?php echo $_SESSION['shoes'] ?> </p>
<p> socks: <?php echo $_SESSION['socks'] ?> </p>

<h2> Order more here </h2>


<form action="shopping_cart.php" method="post" >
shirts <input type="text" name = "shirts" /><br />
pants <input type="text" name = "pants" /><br />
shoes <input type="text" name = "shoes" /><br />
socks <input type="text" name = "socks" /><br />
<input type="submit" value="Order more"> <br />
</form>		

</body>
</html>

