<?php
    
    function factorial($n)
    {
        $fact=1;
        for($i=1;$i<=$n;$i++)
        {
            $fact=$fact*$i;
        }
        return $fact;
    }
    $n=(int)readline("Enter a number: ");
    $res=factorial($n);
    echo "Factorial of ".$n ."is ".$res;