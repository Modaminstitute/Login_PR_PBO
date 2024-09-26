<?php
class A
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
        $static_email = 'budi@pradita.ac.id';
        $static_password = base64_encode('12345');
        $encrypted_password = base64_encode($password);

        if ($email == $static_email && $encrypted_password == $static_password) {
            echo "Login berhasil, Halo $email";
        } else {
            echo "Login gagal, coba lagi!";
            echo '<br><form action="get_pertemuan4.php" method="get">';
            echo '<button type="submit">Kembali ke halaman login</button>';
            echo '</form>';
        }
    }
}

if (isset($_GET["email"]) && isset($_GET["password"])) {
    $a = new A();
    $a->login($_GET["email"], $_GET["password"]);
}
?>