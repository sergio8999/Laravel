<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <h2>Category</h2>
    <?php echo " The category is " . $name; ?>
    <!-- variables with blade -->
    <p>The category is {{$name}}</p>
    <a href="/">Go to welcome</a>
</body>
</html>