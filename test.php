<pre><?php   

require_once('MySQLiController.class.php');
$MySQLiController = new MySQLiController( $dbr );

$tableName = 'test';
//$where = 'name="h\\\egg222"';
$where = 'name="hj"';

$aCol = array('name', 'age');
$aValue = array('name11', 177);

$result = $MySQLiController->insertRow($tableName, $aCol, $aValue);
//$result = $MySQLiController->deleteRow($tableName, $where);

var_dump( $result );

$dbr->close();


?></pre>