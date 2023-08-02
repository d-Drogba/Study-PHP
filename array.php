<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $car = array('Honda', 'Hyundai', 'BMW', 'Ferrari');
    array_push($car, 'Volvo');
    $count = 0;
    
    while($count < count($car)){
        echo $car[$count].'<br>';
        $count = $count + 1;
    }
    
    ?>
</body>
</html>