<?php
session_start();
class operasi{

    private $tiket;
    private $jumlah;

    public function __construct($tiket, $jumlah){
        $this->tiket = $tiket;
        $this->jumlah = $jumlah;
    }

    public function hargatiket(){
        if($this->tiket === "reguler"){
        return $this->jumlah * 200000;
        }
        elseif($this->tiket === "vip"){
            return $this->jumlah * 300000;
        }
    }   

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $namalengkap = $_POST['namalengkap'];
    $telepon = $_POST['telepon'];
    $jumlah = $_POST['jmlhtiket'];
    $tiket = $_POST['tiket'];

    $operasitiket= new operasi($tiket, $jumlah);
    $hargatotal = abs($operasitiket->hargatiket());
}

$_SESSION['registered'] = true;

    if ($email !== $email2) {
        echo "<script> 
            alert('Email dan Konfirmasi Email harus sama!');
            </script>";
        echo "<script>window.location.href = 'Beli.php';</script>";}
        
        else {
            echo "<script>alert('Terima Kasih Sudah Mengisi, Tunggu Sebentar');</script>";
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
<body>
    <div class="header">
        <h1>Mist<span>Fest</span></h1>
    </div>
<div class="akhir">
    <h1>Selamat Kamu Telah Terdaftar</h1>
    <p>Nama Lengkap :</p>
    <?php echo $namalengkap; ?><br>
    <p>No Telepon :</p>
    <?php echo $telepon; ?><br>
    <p>Harga Total :</p>
    <?php echo "Rp. $hargatotal" ?><br>
    <p> INVOICE PEMBAYARAN (BCA) :</p>
    <p><?php echo rand(); ?>
        
    <style>
        .akhir{
            color: whitesmoke;
            font-size: 18px;
            font-family: "Monomaniac One", sans-serif;
            text-align: center;
            border: 3px solid white;
            border-radius: 15px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255,0));
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            margin-top: auto;
            margin-left: auto;
            margin-bottom: auto;
            margin-right: auto;
        }
        .akhir h1 {
            font-family: "Monomaniac One", sans-serif;
        }
    </style>
</div>
<div class="tombolbalik">
    <form action="dashboard.php" name="kembali">
        <input type="submit" value="Kembali!"></button>
    </form>
    <style>
        .tombolbalik{
            font-family: "Monomaniac One", sans-serif;
            text-align: center;
            font-size: 150%;

        }
    </style>
</div>
</body>
</html>
