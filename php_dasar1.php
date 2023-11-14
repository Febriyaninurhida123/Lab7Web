<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <?php
    // Check if the 'nama' key is set in the $_POST array
    if (isset($_POST['nama'])) {
        echo 'Selamat Datang ' . $_POST['nama'];
    }
    ?>
</body>
</html>
