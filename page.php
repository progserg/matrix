<?php
include('classes/Matrix.php');
use \Matrix\Matrix;

?>
<html>
<head>
    <title>test</title>
</head>
<body>
<?php
$matrix = new Matrix();

$i=0;
while ($i<$matrix->getRowCount()){
    $j=0;
    while ($j<$matrix->getColCount()){
        echo $matrix->getValue($i, $j) . "\n";
        $j++;
    }
    echo "<br>";
    $i++;
}

?>
</body>
</html>