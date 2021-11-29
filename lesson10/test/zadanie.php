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
        <?php
            $con = mysqli_connect('localhost', 'root', '', 'sklep');
            $query = "SELECT * FROM `towary`";

            $res = mysqli_query($con, $query);

            $query_id_d = "SELECT dostawcy.`id`, dostawcy.`nazwa` FROM `dostawcy` JOIN towary ON dostawcy.id = towary.idDostawcy";

            while($data = mysqli_fetch_array($res))
            {   
                echo "<input type='checkbox' name='id[]' value='$data[0]'><br>
                    <input type='text' name='name' value='$data[1]'><br>
                    <input type='number' name='price' value='$data[2]'><br>
                    <input type='number' name='prom' value='$data[3]'><br>
                    <select name='id_d'>";
                    $res2 = mysqli_query($con, $query_id_d);
                    while($data2 = mysqli_fetch_array($res2))
                    {
                        echo "<option value='$data[4]' ".($data[4] == $data2[0] ? 'selected' : '' ). ">$data2[1]</option>";
                    }
                    echo "</select>
                    <input type='submit' value='modyfikuj' name='update'><br>
                    <hr>";                
            }            
        ?>
        <input type="submit" value="usun" name="del">
    </form>

    <?php
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];

        if(isset($_POST['update']))
        {
            for($i = 0; $i < count($id); $i++)
            {
                $query = "UPDATE `towary` SET `nazwa` = '$name' WHERE `towary`.`id` = $id[$i]";

                mysqli_query($con, $query);
            }
        }   

        if(isset($_POST['del']))
        {
            for($i = 0; $i < count($id); $i++)
            {
                $query = "DELETE FROM `towary` WHERE `towary`.`id` = $id[$i]";

                mysqli_query($con, $query);
            }
        }        
    }

    mysqli_close($con);
    ?>
</body>
</html>