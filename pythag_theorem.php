<?php

class pythag_theorem extends CI_Controller
{
    public function index()
    {
        echo "Please enter the three sides of a right triangle in the URL, such as:<br/>";
        echo "&nbsp;<br />www.fab4it.com/citest/index.php/pythag_theorem/calc/3/4/huh";
    }
    
    public function calc($a,$b,$c)
    {
        if($a=="huh")
        {
            echo sqrt(pow($c,2)-pow($b,2));
        }
        else if ($b=="huh")
        {
            // a2+b2=c2
            //b2=c2-a2
            echo sqrt(pow($c,2)-pow($a,2));
        }
        else if ($c=="huh")
        {
            echo sqrt(pow($a,2)+pow($b,2));
        }
        else echo "Dunno!";
    }
}
?>
