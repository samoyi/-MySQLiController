# Personal MySQL library for learning


## 使用方法：
1. 保证 MySQLiController.class.php 和 DBInfo.php 在同级目录 。如果不在，需要在前者中修改引用后者的路径。
2. 在 DBInfo.php 中填写数据库信息
3. 然后在需要引入的地方添加如下三行必要代码：  
  1. 第一行： ```require_once('MySQLiController.class.php');```  
引入该类文件，同时自动创建数据库链接资源$dbr并选择数据库
  2. 第二行： ```$MySQLiController = new MySQLiController( $dbr );```  
创建该类实例，并将数据库连接资源作为参数传入
  3. 第三行： ```$dbr->close();```  
所有数据库操作的结尾需要通过 ```$dbr->close()``` 来手动关闭数据库

## 注意事项
* 使用该类会引入一个全局变量 ```$dbr```


## TODO
* 输入函数需要进行数据格式化 $this->dbr->->real_escape_string($str);
* 备份数据库不是mysqli
* 安全
