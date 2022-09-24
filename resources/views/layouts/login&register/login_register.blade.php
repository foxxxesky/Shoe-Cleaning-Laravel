<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Goofle Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/login_register.css">
    <!-- tab icon -->
    <link rel="icon" href="images/testimoni.png">
    @yield('webtitle')
</head>

<body>
    <!-- Split -->
    <div class="grid-container">
        <section id="grid-left" style="background-color: #8F5BD8;">
            <div class="row justify-content-center pb-5">
                <div class="col-9 pt-5">
                    <h5 id="text-kiri" class="text-light">Permudah aktivitas anda dengan mencuci sepatu secara <span
                            id="slip-color">bersih</span> dan
                        <span id="slip-color">cepat!</span>
                    </h5>
                </div>
                <img id="img-kiri" src="images/char.png" alt="">

            </div>
        </section>

        <!-- Right Content -->
        @yield('right_content')
        <!-- Right Content -->
    </div>



    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Script -->
</body>

</html>