<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="hero">
        <div class="row justify-content-center">

            <div class="col">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">

                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">MASUKKAN NAMA LENGKAP UNTUK MEMBUKA UNDANGAN!</h1>
                                    </div>
                                    <form action="welcome.php" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputText" name="nama" placeholder="Nama Lengkap">
                                        </div>

                                        <input type="submit" value="Next" name="btn btn-primary"></input>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>