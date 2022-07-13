<?php
class Arachnomesh{

    //TASK 1 [Find the counts of elements of an unsorted integer array which are equal to the average of all elements of that array]
    public function task1(){
        $array = array(10,9,3,6,5,6,7,8,0);
        $sum = array_sum($array);
        $avg = $sum/count($array);
        $count = 0;
        foreach ($array as $a){
            if($a == $avg){
                $count++;
            }
        }
        echo "<br><b>Task:1</b><br>";
        echo "The number of elements which are equal to average of all elements in an unsorted array is:<b> ".$count."</b><br>";  
    }
    
    
    //TASK 2 [send an email to the first address(in alphabetical order) of each domain]
    public function task2(){
        $array = array("ghi@hotmail.com", "def@yahoo.com", "ghi@gmail.com", "abc@channelier.com", 
        "abc@hotmail.com", "def@hotmail.com", "abc@gmail.com", "abc@yahoo.com", "def@channelier.com",
        "jkl@hotmail.com", "ghi@yahoo.com", "def@gmail.com" );
        sort($array);
        $gmail = array();
        $hotmail = array();
        $yahoo = array();
        $channelier = array();
            foreach ($array as $a){
            if (preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]*(" . implode('|', array('gmail.com')) . ")$/i", $a)){
                array_push($gmail,$a);
            }
            if (preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]*(" . implode('|', array('hotmail.com')) . ")$/i", $a)){
                array_push($hotmail,$a);
            }
            if (preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]*(" . implode('|', array('yahoo.com')) . ")$/i", $a)){
                array_push($yahoo,$a);
            }
            if (preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]*(" . implode('|', array('channelier.com')) . ")$/i", $a)){
                array_push($channelier,$a);
            }
        }
        
        //INSTEAD OF MULTIPLE CONDITIONS IN ONE LOOP (JUST FOR BETTER UNDERSTANDING)
        echo "<br><b>Emails Under Gmail</b><br>";
        foreach ($gmail as $g){
            echo $g ."<br>";
        }
        echo "<br><b>Emails Under Hotmail</b><br>";
        foreach ($hotmail as $h){
            echo $h ."<br>";
        }
        echo "<br><b>Emails Under Yahoo</b><br>";
        foreach ($yahoo as $y){
            echo $y ."<br>";
        }
        echo "<br><b>Emails Under Channelier</b><br>";
        foreach ($channelier as $c){
            echo $c . "<br>";
        }
        //PHP MAIL
        $to = "$gmail[0], $hotmail[0], $yahoo[0], $channelier[0]";
        $subject = "{Subject Here}";
        $txt = "{Main Message}";
        $headers = "From: noreplay@Arachnomesh.com" . "" . "CC: support@Arachnomesh.com";
        //mail($to,$subject,$txt,$headers);
        //if(mail){echo "Mailed"; return 1;} else {echo "Failed"; return 1;} 
    }
    
    
    //TASK 3 [Find the average of largest and smallest numbers in an unsorted integer array]
    public function task3(){
        $array = array(1,4,3,4);
        $max = max($array);
        $min = min($array);
        $max_count = 0;
        $min_count = 0;
        foreach ($array as $a){
            if($a == $max){
                $max_count++;
            }
        }
        foreach ($array as $b){
            if($b == $min){
                $min_count++;
            }
        }
        $average = "<br>Average of <br> $max (no of repeatation: $max_count) <br> $min (no of repeatation: $min_count) <br> in an unsorted integer array is: <b>" .($max*$max_count+$min*$min_count)/($min_count+$max_count) ."</b>";
        echo "<br><b>Task:3</b>";
        echo $average;
    }
}

$result = new Arachnomesh();
$result->task1();
$result->task2();
$result->task3();
?>
