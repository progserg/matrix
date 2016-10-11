<html>
<head>
    <title>matrix</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>
<body>
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
    <div id="matrix">
        <table border="solid">
            <th bgcolor="black" colspan="3">matrix</th>
            <?php $x=0; while ($x<3): ?>
            <tr>
            <?php $y=0; while ($y<3): ?>
            <td><?php $val=rand(0, 100); echo $val; ?></td>
            <?php $y++; endwhile;?>
            <?php $x++; endwhile;?>
            </tr>
        </table>
    </div>
    <div id="btn">
        <input type="submit" value="==>">
    </div>
    <div id="matrix">
        <table border="solid">
            <th bgcolor="black" colspan="3">matrix</th>
            <?php $x=0; while ($x<3): ?>
            <tr>
                <?php $y=0; while ($y<3): ?>
                    <td><?php $val=rand(0, 100); echo $val ?></td>
                    <?php $y++; endwhile;?>
                <?php $x++; endwhile;?>
            </tr>
        </table>
    </div>
</div>
</body>
</html>