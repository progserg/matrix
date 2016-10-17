<?php
include('classes/Matrix.php');
include('classes/MatrixTransformer.php');
use \Matrix\Matrix;
use \Matrix\MatrixTransformer\MatrixTransformer;

?>
<html>
<head>
    <title>test</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php
if (empty($_POST['matrix'])) {
    $matrix = new Matrix(4, 9);
} else {
    $matrix = unserialize(base64_decode($_POST['matrix']));
}
$mt = new MatrixTransformer($matrix);
include('pages/common/matrix.php');
?>
<form action="page.php" method="post">
    <button type="submit" name="matrix" value="<?php echo base64_encode(serialize($matrix)); ?>">test</button>
</form>
<hr>
<?php
$matrix = $mt->transponse();
include('pages/common/matrix.php');
?>

</body>
</html>