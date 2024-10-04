<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="form-container">
        <h2>Login Form</h2>
        <form method="POST" action="SimpleClass_pertemuan4.php">
            <table>
                <tr>
                    <td><input type="text" name="email" placeholder="Enter your email" required /></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Enter your password" required /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" /></td>
                </tr>
                <tr>
                    <td>
                        <p class="registrasi-text">Belum ada akun? <a href="registrasi.php">Registrasi dahulu</a></p>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <footer>
        <p class="credit">by Nickel M and Nicholas ST</p>
    </footer>
</body>

</html>