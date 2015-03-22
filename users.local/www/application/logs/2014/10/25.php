<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-25 06:17:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users3' not found ~ APPPATH\classes\Controller\Ajax.php [ 31 ] in file:line
2014-10-25 06:17:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-25 06:17:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users3' not found ~ APPPATH\classes\Controller\Ajax.php [ 31 ] in file:line
2014-10-25 06:17:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-25 06:17:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users3' not found ~ APPPATH\classes\Controller\Ajax.php [ 31 ] in file:line
2014-10-25 06:17:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-25 06:17:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users3' not found ~ APPPATH\classes\Controller\Ajax.php [ 31 ] in file:line
2014-10-25 06:17:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-25 06:17:49 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Users3::$dbConn ~ APPPATH\classes\Model\Users3.php [ 48 ] in C:\OpenServer\domains\kbpr.local\www\application\classes\Model\Users3.php:48
2014-10-25 06:17:49 --- DEBUG: #0 C:\OpenServer\domains\kbpr.local\www\application\classes\Model\Users3.php(48): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\OpenServer\\d...', 48, Array)
#1 C:\OpenServer\domains\kbpr.local\www\application\classes\Controller\Ajax.php(31): Model_Users3->getAllUsers()
#2 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getAllUsers()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kbpr.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kbpr.local\www\application\classes\Model\Users3.php:48
2014-10-25 06:19:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_PDO::prepare() ~ APPPATH\classes\Model\Users3.php [ 48 ] in file:line
2014-10-25 06:19:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-25 06:25:38 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_PDO::query(), called in C:\OpenServer\domains\kbpr.local\www\application\classes\Model\Users3.php on line 47 and defined ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 127 ] in C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\PDO.php:127
2014-10-25 06:25:38 --- DEBUG: #0 C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\PDO.php(127): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\OpenServer\\d...', 127, Array)
#1 C:\OpenServer\domains\kbpr.local\www\application\classes\Model\Users3.php(47): Kohana_Database_PDO->query('SELECT * FROM u...')
#2 C:\OpenServer\domains\kbpr.local\www\application\classes\Controller\Ajax.php(31): Model_Users3->getAllUsers()
#3 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getAllUsers()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kbpr.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\PDO.php:127
2014-10-25 06:31:37 --- CRITICAL: Database_Exception [ 0 ]: could not find driver ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\PDO.php:130
2014-10-25 06:31:37 --- DEBUG: #0 C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#1 C:\OpenServer\domains\kbpr.local\www\application\classes\Model\Users3.php(47): Kohana_Database_PDO->query(1, 'SELECT * FROM u...')
#2 C:\OpenServer\domains\kbpr.local\www\application\classes\Controller\Ajax.php(31): Model_Users3->getAllUsers()
#3 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getAllUsers()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kbpr.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\PDO.php:130


2014-10-25 07:15:04 --- CRITICAL: Database_Exception [ 0 ]: could not find driver ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\PDO.php:130
2014-10-25 07:15:04 --- DEBUG: #0 C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#1 C:\OpenServer\domains\kbpr.local\www\application\classes\Model\Users3.php(47): Kohana_Database_PDO->query(1, 'SELECT * FROM u...')
#2 C:\OpenServer\domains\kbpr.local\www\application\classes\Controller\Ajax.php(31): Model_Users3->getAllUsers()
#3 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getAllUsers()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kbpr.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kbpr.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kbpr.local\www\modules\database\classes\Kohana\Database\PDO.php:130