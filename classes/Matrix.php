<?php
namespace Matrix;

class Matrix{
    protected $numRow;
    protected $numCol;
    protected $rowCount;
    protected $colCount;
    protected $matrix;

    public function __construct($rowCount=3, $colCount=3)
    {
        $this->rowCount = $rowCount;
        $this->colCount = $colCount;
        $i=0;
        while ($i<$this->rowCount){
            $j=0;
            while ($j<$this->colCount)
            {
                $this->matrix[$i][$j] = rand(0,100);
                $j++;
            }
            $i++;
        }
    }

    public function getValue($numRow, $numCol)
    {
        return $this->matrix[$numRow][$numCol];
    }
    public function getRowCount()
    {
        return $this->rowCount;
    }

    public function setRowCount($rowCount)
    {
        $this->rowCount = $rowCount;
    }

    public function getColCount()
    {
        return $this->colCount;
    }

    public function setColCount($colCount)
    {
        $this->colCount = $colCount;
    }
}