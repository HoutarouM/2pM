<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Koszyczek</h1>
    <form action="" method="post">
        <input type="checkbox" name="produkt[]" value="maslo"> maslo <br>
        <input type="checkbox" name="produkt[]" value="mleko"> mleko <br>
        <input type="checkbox" name="produkt[]" value="chleb"> chleb <br>
        <input type="checkbox" name="produkt[]" value="woda"> woda <br>
    
        <input type="submit" value="click">
    </form>

    <?php

    if(isset($_COOKIE['koszyczek']))
    {
        print_r($_COOKIE['koszyczek']);
    }

    if(isset($_POST["produkt"])) {
        $koszyczek = implode(",", $_POST['produkt']);

        setcookie('koszyczek', $koszyczek, time() + 60 * 60);       
        
        header('Location: form.php');
    }      
    ?>
</body>
</html>