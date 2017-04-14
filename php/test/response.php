<!DOCTYPE html>
<html>
<head>
<title>Response</title>
</head>
<body>
<?php

$salaries['Bob'] = 100000;
$salaries['Ann'] = 80000;
$salaries['Carl'] = 90000;
$salaries['Mary'] = 120000;
$salaries['Joe'] = 45000;
$salaries['Steve'] = 60000;
$salaries['Brenda'] = 110000;
$salaries['Mark'] = 50000;
$salaries['Jack']= 125000;
$salaries['Roy'] = 100000;
$salaries['Alice'] = 80000;
$salaries['Ernie'] = 90000;
$salaries['Karen'] = 120000;
$salaries['Tim'] = 45000;
$salaries['Sam'] = 60000;
$salaries['Sue'] = 110000;
$salaries['Leo'] = 50000;
$salaries['Ed']=125000;

$capitals['Alabama']='Montgomery';
$capitals['Alaska']='Juneau';
$capitals['Arizona']='Phoenix';
$capitals['Arkansas']='Little Rock';
$capitals['California']='Sacramento';
$capitals['Colorado']='Denver';
$capitals['Connecticut']='Hartford';
$capitals['Delaware']='Dover';
$capitals['Florida']='Tallahassee';
$capitals['Georgia']='Atlanta';
$capitals['Hawaii']='Honolulu';
$capitals['Idaho']='Boise';
$capitals['Illinois']='Springfield';
$capitals['Indiana']='Indianapolis'; 
$capitals['Iowa']='Des Moines'; 
$capitals['Kansas']='Topeka'; 
$capitals['Kentucky']='Frankfort'; 
$capitals['Louisiana']='Baton Rouge'; 
$capitals['Maine']='Augusta'; 
$capitals['Maryland']='Annapolis'; 
$capitals['Massachusetts']='Boston'; 
$capitals['Michigan']='Lansing'; 
$capitals['Minnesota']='St. Paul'; 
$capitals['Mississippi']='Jackson'; 
$capitals['Missouri']='Jefferson City'; 
$capitals['Montana']='Helena'; 
$capitals['Nebraska']='Lincoln'; 
$capitals['Nevada']='Carson City'; 
$capitals['NewHampshire']='Concord'; 
$capitals['NewJersey']='Trenton'; 
$capitals['NewMexico']='Santa Fe'; 
$capitals['NewYork']='Albany'; 
$capitals['NorthCarolina']='Raleigh'; 
$capitals['NorthDakota']='Bismarck'; 
$capitals['Ohio']='Columbus'; 
$capitals['Oklahoma']='Oklahoma City'; 
$capitals['Oregon']='Salem'; 
$capitals['Pennsylvania']='Harrisburg'; 
$capitals['RhodeIsland']='Providence'; 
$capitals['SouthCarolina']='Columbia'; 
$capitals['SouthDakota']='Pierre'; 
$capitals['Tennessee']='Nashville'; 
$capitals['Texas']='Austin'; 
$capitals['Utah']='Salt Lake City'; 
$capitals['Vermont']='Montpelier'; 
$capitals['Virginia']='Richmond';
$capitals['Washington']='Olympia ';
$capitals['WestVirginia']='Charleston'; 
$capitals['Wisconsin']='Madison'; 
$capitals['Wyoming']='Cheyenne'; 

// SECTION 1
$fname = trim($_REQUEST['cat']);
$lname = trim($_REQUEST['dog']);
$pass = $_REQUEST['bear'];
$num1 = $_REQUEST['bunny'];
$num2 = $_REQUEST['carrot'];
$num3 = $_REQUEST['mouse'];
$num4 = $_REQUEST['zzz'];
$msg1 = $_REQUEST['yyy'];
$msg2 = $_REQUEST['xxx'];

// END OF SECTION 1

// SECTION 2
foreach ($_REQUEST as $key => $val) {
	echo $key . ' ' . $val . '<br/>';
}






// END OF SECTION 2

// SECTION 3
echo 'Your name is ' . $fname . ' ' . $lname . '<br/>';






// END OF SECTION 3

// SECTION 4
if (strlen($fname) > strlen($lname)) {
	echo "<h2> Your first name is longer than your last naem.</h2>";
}   






// END OF SECTION 4


// SECTION 5
foreach ($salaries as $carrot => $john) {
	
	if ($john < 80000) {
		echo $carrot . '<br/>' ;
	}
	
}






// END OF SECTION 5

// SECTION 6
foreach ($capitals as $c => $s) {
	
	if (strlen($s) > 7) {
		echo $c . '<br/>';
	}
	
}







// END OF SECTION 6

// SECTION 7

foreach ( $capitals $state => $capital ) {
	if ( strlen($state) > strlen($capital) ) {
		echo "The capital of $state is $capital <br/>" ;
	}
}





// END OF SECTION 7

// SECTION 8
   

echo '<h2>' . $capitals[$msg1] . '</h2>';




// END OF SECTION 8

// SECTION 9
   
foreach ($salaries as $person => $salary) {
	
	$salaries[$person] = $salary + 1000 ;
	
}





// END OF SECTION 9

// SECTION 10
   

foreach ($salaries as $person => $salary) {
	
	if ($salary > $num1) {
		echo $person . '<br/>' ;
	}
	
}




// END OF SECTION 10

?>
</body>
</html>

