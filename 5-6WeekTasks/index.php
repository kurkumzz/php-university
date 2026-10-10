<?php
require __DIR__ . '/tasks.php';

$current = isset($_GET['task']) ? (int) $_GET['task'] : 0;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="firstStyle.css">
    <title>СРО задачки 5-7 неделя</title>
</head>
<body>
    <h2>СРО задачки 6-7 неделя</h2><br><br>

    <form method = "get" >
        <label for="task">Задача</label>
        <select name="task" id="task" class="list-tasks" onchange = "this.form.submit()">
            <option value="">выберите</option>
            <?php foreach ($tasks as $n => $title): ?>
                <option value="<?=  $n ?>" <?=  $n === $current ? 'selected' : '' ?>>
                    Задача <?= $n ?> <?= $title ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>
    <br><hr>
    <div id = "result">
        <?php
        if(isset($tasks[$current])){
            $fn = 'task' . $current;
            $fn();
        }
        ?>
    </div><br>

</body>
</html>