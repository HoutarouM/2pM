<?php
    if(isset($_POST['rocznik']) && isset($_POST['kolor']) && isset($_POST['stan'])){
        $rocznik = $_POST['rocznik']; 
        $color = $_POST['kolor'];
        $stan = $_POST['stan'];

        $connect = mysqli_connect('localhost', 'root', '', 'komis');
            if($connect){
                $query = "SELECT * FROM `samochody` WHERE rocznik = '$rocznik' AND kolor = '$color' AND stan = '$stan';";
                $res = mysqli_query($connect, $query);

                if(mysqli_fetch_array($res)){
                    echo "Jest";
                }

                mysqli_close($connect);
            }
    }
?>