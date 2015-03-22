<?php
include 'task-1.php';
?>

<!DOCTYPE html>
    <head>
        <title>Task 1</title>
        <meta http-equiv="content-type"
              content="text/html;charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>

        <div id="nav">
            <h2>Навигация</h2>
            <?php
                $task = new Task1(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME, DB_PORT);
                $task->showMenu($task->getMenu());
            ?>
        </div>

    </body>
</html>