<h1><?php echo $title; ?></h1>

<?php

    echo 'Test Page <hr>';

    echo 'data is'.$DATA_C.'<br>';
    
    echo 'data is'.$aaa.'<br>';
    
    ?>
    <hr>
    <h2>แสดงผลแบบ Array</h2>
    <?php
        print_r($ar);
        echo '<br>';
        
        foreach ($ar as $key => $v){
            echo 'key is '.$key.' => '.$v.'<br>';
        }
        echo '<hr>';
        
        foreach ($ps as $i => $r){
            foreach ($r as $k => $c){
                echo $k.' -> '.$c.'<br>';  
            }
        }
    ?>

