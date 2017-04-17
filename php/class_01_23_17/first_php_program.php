<?php
$user=trim($_REQUEST['username']);
$age=$_REQUEST['age'];
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head><title>First PHP Program</title></head>';
echo '<body>';
echo 'Hi there '.$user.'<br />';
echo 'You are '.$age.' years old<br />';
$new_age = $age + 2;
echo 'In two years you will be '.$new_age.' years old<br />';
echo '</body></html>';
?>