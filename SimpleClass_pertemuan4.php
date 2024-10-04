<!DOCTYPE html>
<html>

<head>
    <title>Suceror</title>
    <link rel="stylesheet" type="text/css" href="suceror.css">
</head>

<body>
    <div class="container">
        <?php
        class loginSystem
        {
            function foo(): void
            {
                if (isset($this)) {
                    echo '$this is defined (' . get_class($this) . ")\n";
                } else {
                    echo "\$this is not defined.\n";
                }
            }

            function login($email, $password): void
            {
                // email pw static (legacy)
                $static_email = 'budi@pradita.ac.id';
                $static_password = base64_encode('12345');
                $encrypted_password = base64_encode($password); // enkrip

                // Cek email pw static akurat
                if ($email == $static_email && $encrypted_password == $static_password) {
                    //sukses
                    echo '<div class="success">Login berhasil, Halo ' . htmlspecialchars($email) . '!</div>';
                    return;
                }

                // Read yang users.txt
                $file_path = 'users.txt';
                if (file_exists($file_path)) {
                    $users = file($file_path);

                    // Loop through users.txt ini copas mbah gpt
                    foreach ($users as $user) {
                        list($fname, $lname, $nim, $stored_email, $stored_password) = explode(",", trim($user));

                        // Cek email pw dynamic
                        if ($email == $stored_email && $encrypted_password == $stored_password) {
                            //sukses
                            echo '<div class="success">Login berhasil, Halo ' . htmlspecialchars($fname) . ' ' . htmlspecialchars($lname) . '!</div>';
                            return;
                        }
                    }
                }

                // gagal
                echo '<div class="error">Login gagal!, Masukan email dan password yang valid</div>';
                echo '<br><form action="login_pert4.php" method="post">';
                echo '<button type="submit">Kembali ke halaman login</button>';
                echo '</form>';
            }
        }

        // copas pa hendra
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $login = new loginSystem();
            $login->login($_POST["email"], $_POST["password"]);
        }
        ?>
    </div>
</body>

</html>