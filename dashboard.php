<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <title>Document</title>

</head>
<body>
    <form action="Beli.php">
    <h1>Type Of Ticket</h1>

    <div class="foto1">
            <img src="REG.png" alt="Mist Fest">
    </div>
    <div class="foto2">
            <img src="VIP.png" alt="Mist Fest">
    </div>
    <style>
        form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
        margin-bottom: 20px;
        }
        input[type="submit"] {
        margin-top: 20px;
        text-align: center;
        }
    </style>
        <input type="submit" value="Beli Tiket" >
    </form>
    <div class="tombolbalik">
    <form action="Page1.php" name="kembali">
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
    <?php
    include("userService.php");

    $loginValid = false;

    while (!$loginValid) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = new userService($email, $password);
            $loggedInUser = $user->login();
            $loggedInUser2 = $user->getRole();

            if ($loggedInUser && $loggedInUser2) {
                echo "<script>alert('Selamat Datang $loggedInUser2, Masuk Sebagai: $loggedInUser');</script>";
                echo "<script>window.location.href = 'dashboard.php';</script>";
                $loginValid = true;
            } else {
                echo "<script>alert('Invalid Login');</script>";
                echo "<script>window.location.href = 'Page1.php';</script>";
            }
        } else {
            $loginValid = true;
        }
    }
    ?>

    <div class= "text-about">
        <h1>About</h1>
        <p>Mist Festival merupakan festival musik multi-genre tahunan berskala 
            nasional yang mengundang puluhan ribu audience untuk merayakan keberagaman jenis musik 
            hidup di lima panggung selama tiga hari, tiga malam, menikmati suguhan 100-an pertunjukan terkurasi 
            dari artis-artis terfavorit dan terbaik tanah air yang datang dari dekade ’70-an, ’80-an, ’90-an hingga 2000-an. 
            Seluruh genre musik populer bakal ditampilkan di Mist Festival Fest. Mulai dari genre pop, R&B, rock & roll, blues, folk, jazz, punk, heavy metal, hiphop, reggae, 
            ska, atau sub-genre hardcore, metalcore, death metal, grindcore, industrial rock, new wave, indie pop, alternative rock/grunge, bossa nova, 
            komedi bahkan hingga dangdut pun akan ikut ditampilkan di pergelaran ini. Selain menikmati ratusan pertunjukan musik, Mist Festival juga akan menyuguhkan berbagai 
            pengalaman terkurasi lainnya bagi para audience, di antaranya adalah Outdoor Cinema, Art & Merch Market, Records Fair hingga F&B Festival. Rincian mengenai program-program 
            tersebut akan dijelaskan lebih lanjut dalam rilis pers berikutnya. Sejarah digelarnya Mist festival sendiri terjadi pada tahun 2000. Berawal dari semangat militan sekelompok anak muda yang 
            mempelopori festival musik elektronik hingga akhirnya sembilan tahun kemudian, pada Februari 2009, berkembang menjadi sebuah festival musik tiga hari yang menampilkan beragam aksi terbaik dari kancah 
            hiburan musik hidup tanah air di Plaza Indonesia Entertainment X’nter, Jakarta.</p>
    </div>
    
</body>
</html>
