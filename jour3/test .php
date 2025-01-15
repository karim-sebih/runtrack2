<?php 


$test = "hjbcjvbdj";

for ( $i=0; isset($test[$i]); $i++){

    echo $test[$i] . "<br>";
}


$test3= [2,4,7,"l"];
echo $test3[2] . "<br>";
foreach($test3 as $value){
    echo $value . "<br>";
}



$test2 = ['nom'=>"aicha", "knom"=>"ouattara"];
foreach ($test2 as $key => $value) {
    echo $key . " :" . $value ."<br>";
   

}