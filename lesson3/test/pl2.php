<?php
    if(!empty($_POST['n1']) && !empty($_POST['n2'])){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        echo "Twoje liczby<br>";

        if($n1 > $n2){        
        for($i = $n1; $i >= $n2; $i--){
            echo "$i, ";
        }

            echo "<br>";
        echo "Szczesliwe numery<br>";
        echo "<form action='pl3.php' method='post'>";
        for($i = $n1; $i >= $n2; $i--){
            echo "<input type='checkbox' name='c[]' value='$i'>$i<br>";
        }
        echo "<input type='submit' value='dalej'></form>";
    } else{
        for($i = $n1; $i <= $n2; $i++){
            echo "$i, ";
        }

            echo "<br>";
            echo "Szczesliwe numery<br>";
            echo "<form action='pl3.php' method='post'>";
            for($i = $n1; $i <= $n2; $i++){
                echo "<input type='checkbox' name='c[]' value='$i'>$i<br>";
            }
            echo "<input type='submit' value='dalej'></form>";
        }

    }
        
?>