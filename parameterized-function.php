<?php
function sum($a,$b){
    echo ($a+$b);
    echo "</br>";
}
sum (10,20);

sum(100,200);

sum(200,400);

function userdata($name,$color){

    echo "<h1 style='color:$color':>$name</h1>";
}

userdata("Kalane ","red");

userdata("Miraj ","blue");
?>