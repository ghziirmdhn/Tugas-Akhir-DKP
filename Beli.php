<?php
session_start();
if (isset($_SESSION['registered'])) {
    $registeredMessage = "Anda Telah Mendaftar Sebelumnya!";
    unset($_SESSION['registered']);
} else {
    $registeredMessage = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Monomaniac+One&display=swap" rel="stylesheet">
    <title>Tugas Akhir DKP</title>

</head>
<body class="pembelian">
<div class="header">
    <h1>Mist<span>Fest</span></h1>
    </div>
    <style>
        .resgistermsg{
            font-family: "monomaniac one";
            text-align: center;
            color: white;
            font-size: 30px;
        }
        </style>
    <div class = resgistermsg>
    <p><?php echo $registeredMessage ?></p>
    </div>
    <div class="datauser">
    <h1>Silahkan Isi Data</h1>
        <form action="hasil.php" method="POST">
        <ul>
            <label for="email">Email:</label><br>
                <input type="email" name="email" required><br>
            <label for="email2">Konfirmasi Email:</label><br>
                <input type="email" name="email2" required><br>
            <label for="namalengkap" >Nama Lengkap:</label><br>
                <input type="text" name="namalengkap" pattern="[A-Za-z]+\D+"required><br>
            <label for="telpon">Nomor Telepon:</label><br>
                <input type="number" name="telepon" required><br>
            <label>Pilih Tiket :</label><br>
                    <select id="tiket" name="tiket">
                        <option value="reguler">Reguler</option>
                        <option value="vip">VIP</option>
                    </select><br>
            <label>Jumlah Tiket : </label><br>
                <input type="number" name="jmlhtiket" value="<?php echo $jumlah; ?>" required min="1"><br>
                <input type="submit" value="Submit!" name="submit" class="posisitombolsubmit">
                </form>
                <form action ="dashboard.php" name ="kembali">
                <input type="submit" value="Kembali!" name="kembali">
                </form>
            </ul>
    </div>
</body>
</html>
