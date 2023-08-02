<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Function</title>
</head>

<body>
    <h1>Function</h1>
    <h2>Basic</h2>

    <?php 
        function basic() {
            print("Didier Drogba<br>");
            print("Fernando Torress<br>");
        }

        basic();
    ?>
    <h2>parameter & amp; argument</h2>
    <?php
    function sum($left, $right) {
        print($left+$right);
        print("<br>");
    }

    sum (1,3);
    ?>

    <h2>return</h2>
    <?php
    function sum2($left, $right) {
        return $left+$right;
    }
    print(sum2(1,3));
    ?>

</body>

</html>