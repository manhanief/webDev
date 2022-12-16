<!DOCTYPE html>
<?php
    $info = array(
        "row1"=>array('1','Anip','20'),
        "row2"=>array('2','Hatta','12','Mamat'),
        "row3"=>array('3','Nazri','13'), 
        "row"=>array('4','Mamat','22') 
    );

    echo " id    name   age";
    echo"<br>";
    foreach($info as list($a,$b,$c)){
        echo  $a." \t".$b." \t ".$c."\n";
        echo"<br>";

    }
?>