<?php
    $mark = $_POST['mark'];
    $score ;

    if($mark >=0 && $mark < 39)
    {
        echo "The grade is : F";
        $score = 1;
    }
    else if($mark >=40 && $mark <= 49)
    {
        echo "The grade is : D";
        $score = 2;
    }
    else if($mark >=50 && $mark <= 59)
    {
        echo "The grade is : C";
        $score = 3;
    }
    else if($mark >=60 && $mark <= 69)
    {
        echo "The grade is : B";
        $score = 4;
    }
    else if($mark >=70 && $mark <= 100)
    {
        echo "The grade is : A";
        $score = 5;
    }

    echo "\n";

    switch ($score)
    {
        case 1;
        {
            echo "The grade is : F";
            break;
        }
        case 2; 
        {
            echo "The grade is : D";
            break;
        }
        case 3;
        {
            echo "The grade is : C";
            break;
        }
        case 4; 
        {
            echo "The grade is : B";
            break;
        }
        case 5; 
        {
            echo "The grade is : A";
            break;
        }
        default;
        {
            echo "The score is in valid";
            break;
        }
    }

    
?>