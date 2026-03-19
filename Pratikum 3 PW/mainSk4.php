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