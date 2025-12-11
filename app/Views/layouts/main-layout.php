<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $this -> renderView('parts/header.php') ?>
    <?php echo $content ?>
    <?php $this -> renderView('parts/footer.php') ?>
</body>
</html>