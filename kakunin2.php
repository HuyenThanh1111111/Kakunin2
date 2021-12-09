<?php
for($i =1; $i <= 10; $i ++) {
    if($i ==2){
        continue;
    }else if($i == 7) {
        break;
    } else {
    echo $i."\n";
    }

}