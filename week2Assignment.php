<?php
    //note that readline command works on command line some web interpreters wouldn't read it by default
    $name = (string)readline('Enter your name: ');
    echo "Hello  ". $name;

    $Age = (int)readline('Enter your age: ');
    $PVC = (string)readline('Do you have your PVC?(yes or no) : ');
    $ward = (int)readline('Input your ward number');

    if ($Age >= 18){
        echo $PVC;
            if ($PVC = yes){
                echo $ward;
                    if($ward = 20){
                        echo "You are eligible to vote here";
                    }
                    elseif($ward!=20){
                        echo "This is not your ward check elsewhere";
                    }
            }
            elseif ($PVC = no){
                echo "You are not eligible to vote, since you do not have your PVC";
            }
    }
    else{
        echo "You are too young to vote";
    }
?>