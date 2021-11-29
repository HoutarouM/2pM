<?php
    if(isset($_POST['c'])){
        $num = $_POST['c'];
        echo "Twoje liczby: <ul>";
        for($i=0; $i<count($num);$i++){
            echo "<li>$num[$i]</li>";
        }
        echo "</ul>";
    }
?>