<?php
include('classes/Matrix.php');
include('classes/MatrixTransformer.php');
use \Matrix\Matrix;
use \Matrix\MatrixTransformer\MatrixTransformer;

?>
<html>
<head>
    <title>test</title>
</head>
<body>
<?php

$matrix = new Matrix(4, 9);
$mt = new MatrixTransformer($matrix);
//var_dump($mt);
$i = 0;
while ($i < $matrix->getRowCount()) {
    $j = 0;
    while ($j < $matrix->getColCount()) {
        echo $matrix->getValue($i, $j) . "\n";
        $j++;
    }
    echo "<br>";
    $i++;
}
?>
<hr>
<?php
$mt->transponse();
$i = 0;
while ($i < $mt->getRowCount()) {
    $j = 0;
    while ($j < $mt->getColCount()) {
        echo $mt->getValue($i, $j) . "\n";
        $j++;
    }
    echo "<br>";
    $i++;
}
?>
</body>
</html>