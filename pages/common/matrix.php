<?php
$colCount = $matrix->getColCount();
//echo $colCount;
$rowCount = $matrix->getRowCount();
//echo $rowCount;
?>
<div id="matrix">
    <table border="solid">
        <th bgcolor="black" colspan="<?php echo $colCount; ?>"><?php echo $matrix->name; ?></th>
        <?php
        $x = 0;
        while ($x < $rowCount): ?>
        <tr>
            <?php $y = 0;
            while ($y < $colCount): ?>
                <td><?php echo $matrix->getValue($x, $y);
                    ?></td>
                <?php $y++; endwhile; ?>
            <?php $x++;
            endwhile;
            ?>
        </tr>
    </table>
</div>