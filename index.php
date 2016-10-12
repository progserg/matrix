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
    while ($i < 9) {
        $origMatrix[$i] = rand(0, 100);
        $i++;
    }
    return $origMatrix;
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
            <?php $j = 0;
            $x = 0;
            while ($x < 3): ?>
            <tr>
                <?php $y = 0;
                while ($y < 3): ?>
                    <td><?php echo $origMatrix[$j];
                        $j++; ?></td>
                    <?php $y++; endwhile; ?>
                <?php $x++;
                endwhile;
                ?>
            </tr>
        </table>
    </div>
    <div id="btn">
        <form action="index.php" method="post">
            <?php foreach ($origMatrix as $elem): ?>
                <input type="hidden" name=origMatrix[] value="<?php echo $elem; ?>">
            <?php endforeach; ?>
            <input type="submit" value="==>">
        </form>
    </div>
    <div id="matrix">
        <table border="solid">
            <th bgcolor="black" colspan="3">matrix</th>
            <?php $x = 0;
            while ($x < 3): ?>
            <tr>
                <?php $y = 0;
                while ($y < 3): ?>
                    <td><?php $val = rand(0, 100);
                        echo $val ?></td>
                    <?php $y++; endwhile; ?>
                <?php $x++;
                endwhile; ?>
            </tr>
        </table>
    </div>
</div>
</body>
</html>