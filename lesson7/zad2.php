<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="zawodnik">         
        
        <?php
             $con = mysqli_connect('localhost', 'root', '', 'egzamin2');
             $query = "SELECT * FROM `zawodnik`";
             $res = mysqli_query($con, $query);
 
             while($data = mysqli_fetch_array($res))
             {
                 echo "<option value='$data[0]'>$data[2] $data[3]</option>";
             }
        ?>

        <input type="submit" value="click">

    </select>    
    </form>

    <?php
        if(isset($_POST['zawodnik']))
        {
            $zawodnik = $_POST['zawodnik'];
            $query = "SELECT `id`, `wynik`, `dataUstanowienia` FROM `wyniki` WHERE sportowiec_id = $zawodnik";
           $res = mysqli_query($con, $query);

           while($data = mysqli_fetch_array($res))
           {
               echo "<form action='' method='post'>
               <input type='hidden' name='id_w' value='$data[0]'>
               wynik:
               <input type='number' name='wynik_m' value='$data[1]'>
               <br> 
               data: 
                <input type='date' name='data_m' value='$data[2]'>
                <br>
                <input type='submit' name='u' value='zmodyfikuj'>
                <input type='submit' name='d' value='usun'>
                </form>";
           }          
       }

       if(isset($_POST['id_w']) && !empty($_POST['wynik_m']) && !empty($_POST['data_m']))
       {
           $id_w = $_POST['id_w'];

           $wynik_m = $_POST['wynik_m'];
           $data_m = $_POST['data_m'];

           if(isset($_POST['d']))
           {
            $query_d = "DELETE FROM `wyniki` WHERE `wyniki`.`id` = $id_w";
            mysqli_query($con, $query_d);
           }     
           
           if(isset($_POST['u']))
           {
            $query_u = "UPDATE `wyniki` SET `wynik` = '$wynik_m', `dataUstanowienia` = '$data_m' WHERE `wyniki`.`id` = $id_w ";
           mysqli_query($con, $query_u);
           }            
       }

        mysqli_close($con);
    ?>
</body>
</html>