<?php
$name = $email = $password = "";
$nameErr = $emailErr = $passwordErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    function test_input($data){
        return htmlspecialchars(stripslashes(trim($data)));
    }
    if(isset($_POST["name"])){
        $name = test_input($_POST["name"]);
        if(empty($name)){
            $nameErr = "Nama Harus diisi";
        } elseif(!preg_match("/^[a-zA-Z]*$", $name)){
            $nameErr = "Hanya huruf dan Spasi yang Diperbolehkan";
        }
    }

    if(isset($_POST["email"])){
        $email = test_input($_POST["email"]);
        if(empty($email)){
            $emailErr = "Email Harus Diisi";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr= "Format email tidak valid";
        }
    }
    if(isset($_POST["password"])){
        $password = test_input($_POST["password"]);
        if(empty($password)){
            $passwordErr = "Password Harus Diisi";
        } elseif (strlen($password) <6){
            $passwordErr = "Password Minimal 6 karakter";
        } elseif(!preg_match("/[\W]/", $password)){
            $passwordErr = "Password minimal mengandung satu simbol(!@#$%%)";
        }
    }

        if(!$nameErr && !$emailErr && !$passwordErr){
            echo "<h3>Data yang dikirim:</h3>";
            echo "nama : ".$name. "<br>";
            echo "Email :".$email;
            
        }
    }
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <Title>Form Sederhana Dengan Validasi</Title>
    </head>
    <body>
        <h2>Form Input</h2>
        <form action="" method="post">
            Nama: <input type="text" name="name" value="<?php echo $name; ?>" required>
            <span style="color : red;">* <?php echo $nameErr; ?></span>
            <br><br>

            Email: <input type="email" name="email" value="<?php echo $email; ?>" required>
            <span style="color : red;">* <?php echo $emailErr; ?></span>
            <br><br>

            Password: <input type="password" name="password" value="<?php echo $password; ?>" required>
            <span style="color : red;">* <?php echo $passwordErr; ?></span>
            <br><br>

            <input type="submit" value="kirim">
        </form>
    </body>
</html>