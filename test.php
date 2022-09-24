<?php 
    $month = date('n');
    if($month >= 4){
        $fy = date('Y').'-'.(date('y') + 1);
    }
    else if($month <= 3){
        $fy = (date('Y') - 1).'-'.(date('y'));
    }
    print_r($fy);
?>