<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con = mysqli_connect('localhost', 'root', '', 'egzamin3');
            $query = "SELECT id, Lowisko_id, `data_zawodow`, `sedzia` FROM `zawody_wedkarskie` ";
            $res = mysqli_query($con, $query);
            
            while($data = mysqli_fetch_array($res))
            {
                echo " <form action='' method='post'>
                <input type='hidden' name='id' value='$data[0]'>

                Lowisko: <select name='lowisko'>";

                    $query_akwen = "SELECT id, `akwen` FROM `lowisko`";
                    $akwen = mysqli_query($con, $query_akwen);
                    
                    while($akwenn = mysqli_fetch_array($akwen))
                    {
                        echo "<option value='$akwenn[0]'";

                        if($akwenn[0] == $data[1]) echo "selected";
                        
                        echo">$akwenn[1]</option>";
                    }                    
                    
                echo "</select>
                <br>
                Data: <input type='data' name='data' value ='$data[2]'>
                <br>

                Sendzia: <input type='text' name='sendzia' value='$data[3]'>

                <br>

                <input type='submit' value='update' name = 'update'>
                <input type='submit' value='delete' name = 'delete'>
                </form>
                <br>
                <br>";
            }       
    ?>

    <?php
        if(isset($_POST['lowisko']) && !empty($_POST['data']) && isset($_POST['sendzia']))
        {
            $id = $_POST['id'];
            $lowisko = $_POST['lowisko'];
            $data = $_POST['data'];
            $sendzia = $_POST['sendzia'];
            
            if(isset($_POST['update']))
            {
                $query = "UPDATE `zawody_wedkarskie` SET `Lowisko_id` = '$lowisko', data_zawodow = '$data', sedzia = '$sendzia' WHERE `zawody_wedkarskie`.`id` = $id";
            }

            if(isset($_POST['delete']))
            {
                $query = "DELETE FROM `zawody_wedkarskie` WHERE `zawody_wedkarskie`.`id` = $id";
            }

            mysqli_query($con, $query);

            header('Location: http://localhost/2pM/lesson8/update.php');
        }
        
        mysqli_close($con);        
    ?>
</body>
</html>