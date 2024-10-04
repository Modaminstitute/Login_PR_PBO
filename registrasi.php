<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="registrasi.css">
</head>

<body>
    <button class="back-btn" onclick="window.location.href='login_pert4.php';">Back to login
    </button>
    <div class="form-container">
        <h2>Registration form</h2>
        <form method="POST" action="regisclass.php">
            <table>
                <tr>
                    <td>
                        <h3>Nama Depan</h3>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="fname" placeholder="Masukan nama depan Anda"
                            onkeydown="return /^[a-zA-Z]$/.test(event.key) || event.key === 'Backspace'" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Nama Belakang</h3>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="lname" placeholder="Masukan nama belakang Anda"
                            onkeydown="return /^[a-zA-Z]$/.test(event.key) || event.key === 'Backspace'" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Nomer Induk</h3>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="nim" placeholder="Masukan nomor induk mahasiswa Anda"
                            onkeydown="return /^[0-9]$/.test(event.key) || event.key === 'Backspace'" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>E-mail</h3>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="email" placeholder="Masukan email baru Anda" required /></td>
                </tr>
                <tr>
                    <td>
                        <h3>Password baru</h3>
                    </td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Masukan password baru Anda" required /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>

<footer>
    <p class="credit">by Nickel M and Nicholas ST</p>
</footer>

</html>