<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
    <ul>
        <?php foreach ($tasks as $key => $task): ?>
            <li> <a href = "{{'tasks/'. $key}}"><?php echo $task ?></a></li>
            <?php endforeach; ?>

    </ul>
</body>
</html>