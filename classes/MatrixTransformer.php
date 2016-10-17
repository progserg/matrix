<?php

namespace Matrix\MatrixTransformer;

use Matrix\Matrix;

class MatrixTransformer
    extends Matrix
{
    
    public function __construct(Matrix $matrix)
    {
        $this->name = 'transform';
        $this->rowCount = $matrix->rowCount;
        $this->colCount = $matrix->colCount;
        $i=0;
        while ($i<$this->rowCount){
            $j=0;
            while ($j<$this->colCount)
            {
                $this->matrix[$i][$j] = $matrix->getValue($i, $j);
                $j++;
            }
            $i++;
        }
    }


    public function transponse()
    {
        $this->name = 'transponse';
        $i = 0;
        $temp = $this->matrix;
        $this->matrix = null;
        while ($i < $this->rowCount) {
            $j = 0;
            while ($j < $this->colCount) {
                $this->matrix[$j][$i] = $temp[$i][$j];
                $j++;
            }
            $i++;
        }
        unset($temp);
        $x = $this->rowCount;
        $this->rowCount = $this->colCount;
        $this->colCount = $x;
        unset($x);
    return $this;
    }
}