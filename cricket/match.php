<?php
    include ('team.php');

    $match_a = array(
        "kolkata" => array(
            "a" => 6,
            "b" => 5,
            "c" => 55,
            "d" => 52,
            "e" => 59,
            "f" => 48,
            "g" => 22,
            "h" => 58,
            "i" => 98,
            "j" => 2,
            "k" => 5
        ),
        "delhi" => array(
            "ac" => 6,
            "bf" => 5,
            "ce" => 55,
            "dr" => 5,
            "eq" => 59,
            "fg" => 48,
            "gh" => 2,
            "hk" => 58,
            "io" => 78,
            "jj" => 2,
            "kl" => 5
        )
    );

    class match
    {
        function create_obj(){
            global $match_a;
            //print_r($match_a);
            $i = 1;
            $teams = array();
            foreach($match_a as $key => $val){
                $teams[$i] = new team($key, $val);
                $i++;
            }
             foreach($teams as $key => $val){
                 
                 
                 foreach($val as $name => $run){
                     
                     foreach($run as $k1 => $k2)
                     {
                         
                         foreach($k2 as $a1 => $a2){
                             echo $a1." ".$a2;
                             
                         }
                     }
                 }
             }
        }
    }

?>