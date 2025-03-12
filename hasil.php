<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];


    $hasil = [
        "Italia" => 0,
        "Jepang" => 0,
        "Meksiko" => 0
    ];

    $hasil[$q1]++;
    $hasil[$q2]++;
    $hasil[$q3]++;

    $max_value = max($hasil);
    $hasil_terbanyak = array_keys($hasil, $max_value);

    $kelas_body = strtolower($hasil_terbanyak[0]);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuisioner</title>
    <link rel="stylesheet" href="hasil.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="<?php echo $kelas_body; ?>">
    <div class="container">
        <h1>Petualangan Kuliner Kamu Menunggu!</h1>
        
        <div class="hasil-box">
            <?php if (in_array("Jepang", $hasil_terbanyak)) { ?>
                <h1>Jepang</h1>
                <img src="images/japan.jpg" alt="Makanan Jepang">
                <p>Kamu lebih cocok dengan makanan khas Jepang seperti sushi dan ramen!</p>

            <?php } elseif (in_array("Meksiko", $hasil_terbanyak)) { ?>
                <h1>Meksiko</h1>
                         <img src="images/mexico.jpg" alt="Makanan Meksiko">       
                <p>Kamu lebih cocok dengan makanan khas Meksiko seperti tacos dan burrito!</p>

            <?php } elseif (in_array("Italia", $hasil_terbanyak)) { ?>
                <h1>Italia </h1>
                <img src="images/italy.jpg" alt="Makanan Italia">                
                <p>Kamu lebih cocok dengan makanan khas Italia seperti pasta dan pizza!</p>
            <?php } ?>
        </div>

        <br>
        <a href="landing.html"><button>Kembali</button></a>
    </div>
</body>
</html>
