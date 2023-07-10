<?php

function multiply(&$arr1, &$arr2, &$res)
{
    $N = 4;
    for ($i = 0; $i < $N; $i++)
    {
        for ($j = 0; $j < $N; $j++)
        {
            $res[$i][$j] = 0;
            for ($k = 0; $k < $N; $k++)
                $res[$i][$j] += $arr1[$i][$k] * 
                                $arr2[$k][$j];
        }
    }
}
  
// Driver Code
$arr1 = array(array(1, 1, 1, 1)
  
$arr2 = array(array(1, 1, 1, 1)
  
multiply($arr1, $arr2, $res);
$N = 4;
echo ("Result matrix is 
");
for ($i = 0; $i < $N; $i++)
{
    for ($j = 0; $j < $N; $j++)
    {
        echo ($res[$i][$j]);
        echo(" ");
    }
    echo ("
");
}
?>