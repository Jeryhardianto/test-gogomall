<?php 
function searchIndx($array,$findint){
        foreach($array as $key => $value){
                if($value == $findint){
                        return $key;
                }
                if($value != $findint){
                      $foo = -1;
                }
        }
        return $foo;
}
echo searchIndx([3,2,1,5,4,6,8],7);
?>