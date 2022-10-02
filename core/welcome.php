<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- <h2>INI ADALAH HALAMAN WELCOME UNDANGAN</h2>
<br>
    <a href="main.php"><button type="button" class="btn btn-danger">Buka Undangan</button></a>
-->
    <section id="main" class="main">
        <div class="card_welcome">
            <div class="card_main">
                <h2>Natal Permata GBKP Rg Diski</h2>
                <br>
            </div>
            <div class="card_main">
                <h3>Selamat Datang</h3>
                <h4> <?php
                        echo "Kpd Saudara: " . $_POST['nama']; ?></h4>

                <a href="main.php"><button type="button" class="btn1">Buka Undangan</button></a>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>