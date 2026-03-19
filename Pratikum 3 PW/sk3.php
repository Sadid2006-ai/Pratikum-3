<!DOCTYPE html>
<html>
    <head>
        <title>Form Sederhana</title>
    </head>
    <body>
        <h2>Form Input</h2>
        <form action="" method="post">
            Nama: <input type="text" name="name" required><br><br>
            Email: <input type="email" name="email" required><br><br>
            <input type="submit" value="kirim">
        </form>

        <?php
        if( $_SERVER['REQUEST_METHOD'] =='POST'){
            $name = htmlspecialchars ($_POST["name"]);
            $email = htmlspecialchars ($_POST["email"]);
            echo "<h3>Data yang Dikirm<h3>";
            echo "Nama: ". $name ."br";
            echo "Email: ". $email;
        }
        ?>
    </body>
</html>