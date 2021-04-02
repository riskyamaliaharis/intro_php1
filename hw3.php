<?php 
    function printSegitiga(int $val){
        for ($i=5; $i<=$val; $i--){
            for ($j=1; $j<=$i; $j++){
                echo $j. " ";
            }
            echo "</br />";
        }
    };

    printSegitiga(5);
?>