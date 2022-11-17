<?php
    $array = [2,6,10,20,14,9];
    $array1 = [4,8,2,26,18,14];

    function arrayToString($arr)
    {
        return implode('-',$arr);
    }

    function average($avg)
    {
        return array_sum($avg) / count($avg);
    }

    function isPair($arre)
    {
       foreach($arre as $arr)
       {
          if($arr % 2 !== 0) return false;   
       }
       return true;
       // return array_filter(array_count_values($arre), fn ($arre) => $arre % 2 === 0);
    }
