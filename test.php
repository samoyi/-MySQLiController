<pre><?php   

require_once('MySQLiController.class.php');
$MySQLiController = new MySQLiController( $dbr );


$result = $MySQLiController->changeColumnName("test", "name", "nickname" );  

print_r( $result );

$dbr->close();


?></pre>