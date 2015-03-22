<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-23 08:17:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_PostgreSQL' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-10-23 08:17:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 08:17:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_PostgreSQL' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-10-23 08:17:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 09:47:42 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-23 09:47:42 --- DEBUG: #0 C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#2 C:\OpenServer\domains\kbpr.local\www\application\classes\Model\Users2.php(29): Kohana_Database_Query->execute()
#3 C:\OpenServer\domains\kbpr.local\www\application\classes\Controller\Ajax.php(31): Model_Users2->getAllUsers()
#4 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getAllUsers()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kbpr.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-23 09:53:58 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-23 09:53:58 --- DEBUG: #0 C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#2 C:\OpenServer\domains\kbpr.local\www\application\classes\Model\Users2.php(29): Kohana_Database_Query->execute()
#3 C:\OpenServer\domains\kbpr.local\www\application\classes\Controller\Ajax.php(31): Model_Users2->getAllUsers()
#4 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getAllUsers()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kbpr.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\MySQL.php:171