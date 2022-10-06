<?php 
for($i = 1; $i <= 100; $i++){
    if($i%3 == 0 && $i%5 == 0){
        echo "Hello World".$i.PHP_EOL;
    }elseif($i%3 == 0){
        echo "Hello".$i.PHP_EOL;
    }elseif($i%5 == 0){
        echo "World".$i.PHP_EOL;
    }
}

?>