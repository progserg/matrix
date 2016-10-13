<html>
<head>
    <title>matrix</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>
<body>
<?php
function generate_matrix()
{
    $i = 0;

    while ($i < 3) {
        $j = 0;
        while ($j < 3) {
            $origMatrix[$i][$j] = rand(0, 100);
            $j++;
        }
        $i++;
    }
    return $origMatrix;
}

function transponse($origMatrix)
{
    $i = 0;
    while ($i < 3) {
        $j = 0;
        while ($j < 3) {
            $matrixT[$j][$i] = $origMatrix[$i][$j];
            $j++;
        }
        $i++;
    }
    return $matrixT;
}

?>
<div id="header">
    <h1>MATRIX</h1>
</div>
<div id="wrapper">
    <div id="menu">
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </div>

    <?php if (empty($_POST['origMatrix']) || !empty($_POST['generate'])) {
        $origMatrix = generate_matrix();
    } //echo 'origMatrix пустой';
    else {
        $origMatrix = $_POST['origMatrix'];
    } ?>
    <div id="matrix">
        <table border="solid">
            <td>
                <form action="index.php" method="post">
                    <button type="submit" name="generate" value="true">gen</button>
                </form>
            </td>
            <th bgcolor="black" colspan="3">matrix</th>
            <?php
            $x = 0;
            while ($x < 3): ?>
            <tr>
                <?php $y = 0;
                while ($y < 3): ?>
                    <td><?php echo $origMatrix[$x][$y];
                        ?></td>
                    <?php $y++; endwhile; ?>
                <?php $x++;
                endwhile;
                ?>
            </tr>
        </table>
    </div>
    <div id="btn">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <?php $i = 0;
            while ($i < 3): ?>
                <?php $j = 0;
                while ($j < 3): ?>
                    <input type="hidden" name="origMatrix[<?php echo $i; ?>][<?php echo $j; ?>]"
                           value="<?php echo $origMatrix[$i][$j]; ?>">
                    <?php $j++; endwhile; ?>
                <?php $i++; endwhile; ?>
            <input type="submit" value="транспонировать" name="transponse">
        </form>
    </div>
    <?php if (!empty($_POST['transponse'])) :
        $matrixT = transponse($origMatrix);

    ?>
    <div id="matrix">
        <table border="solid">
            <th bgcolor="black" colspan="3">transponse matrix</th>
            <?php
            $x = 0;
            while ($x < 3): ?>
            <tr>
                <?php $y = 0;
                while ($y < 3): ?>
                    <td><?php echo $matrixT[$x][$y];
                        ?></td>
                    <?php $y++; endwhile; ?>
                <?php $x++;
                endwhile;
                ?>
            </tr>
        </table>
    </div>
    <?php endif;?>
</div>
</body>
</html>