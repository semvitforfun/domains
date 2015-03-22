<?php
include 'task-1.php';
?>

<!DOCTYPE html>
    <head>
        <title>Task 1</title>
        <meta http-equiv="content-type"
              content="text/html;charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="accordion.css" type="text/css" media="screen" charset="utf-8"/>
        <script src="public/jquery-1.7.1.min.js" type="text/javascript" ></script>
        <script type="text/javascript" src="script.js"></script>
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