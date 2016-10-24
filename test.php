<pre><?php   

require_once('MySQLiController.class.php');
$MySQLiController = new MySQLiController( $dbr );

//echo date("Y-m-d G:i:s");
$result = $MySQLiController->updateData("test", ["modifyTime", "age"], [date("Y-m-d G:i:s"), 999], 'name="ni"');


//2016-10-14 00:00:00

print_r( $result );

$dbr->close();


?></pre>