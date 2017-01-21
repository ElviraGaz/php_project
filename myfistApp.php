<?php
/**
 * Created by PhpStorm.
 * User: elvira
 * Date: 21.01.17
 * Time: 13:48
 */
class Triangle {

    function create($n)
    {
        for ($i=0;$i<=$n; $i++){
            $this->print_space($n-$i);
            for ($j = 0; $j <= $i; $j++) {
                echo $this->calc($i, $j)." ";
            }
            echo "\n";
        }
    }

    function print_space($n)
    {
        for($i=0;$i<$n; $i++)
            echo " ";
    }
    function calc($n, $k)
    {

        return $result= $this->factorial($n)/(float)($this->factorial($k)*$this->factorial($n-$k));
    }

    function myname (){
        $this->factorial(5);
        $this->factorial(0);
        $this->factorial(1);
        echo 'hello world';
    }

    function factorial ($num) {
        $result=1;
        if ($num<0)
            return 0;
        if ($num == 0 || $num ==1)
            return 1;
        else for ($i=1; $i<=$num; $i++)
        {
          $result*=$i;
        }
        return $result;
    }
}

$t = new Triangle();
$t->create(4);

