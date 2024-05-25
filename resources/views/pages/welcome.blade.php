<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pepes Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<style>
    .card {
        padding: 2rem;
    }

    .header-card {
        padding-bottom: 0.5rem;
    }

    .navibar {
        display: flex;
        flex-direction: row;
        list-style: none;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .room-prices {
        border-collapse: collapse;
        width: 80%;
        margin: auto;
        margin-top: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .room-prices th,
    .room-prices td {
        padding: 10px;
        text-align: center;
    }

    .room-prices th {
        background-color: #333;
        color: #fff;
    }

    .room-prices tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="container-fluid" style="background-color:white">
                <nav class="navbar-expand-lg mx-auto navibar" style="max-width: 1140px;">
                    <ul class="navibar mr-auto my-auto" style="margin-left:-2.5rem ;">
                        <li class="mt-3 mb-3 mr-3">
                            <a href="#">
                                <img class="img-fluid rounded-circle rounded" width="60" height="60" src="assets/img/logo-pepes.png" alt="">
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link text-black-50 font-weight-bolder" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link text-black-50 font-weight-bolder" href="#Produk">Produk</a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link text-black-50 font-weight-bolder" href="#Harga">Harga</a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link text-black-50 font-weight-bolder" href="#About-Us">Tentang Kami</a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link text-black-50 font-weight-bolder" href="">Pesan</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Main Content -->
            <div class="container-fluid">
                <section class="section">

                    <!-- Card -->
                    <div class="card mx-auto mt-5" style="max-width: full; background-color:white">
                        <div class="card-body text-center" style="background-color:white; margin-top:94px">
                            <h1 class="font-weight-bold">
                                Kami ada untuk liburan yang menyenyakkan
                            </h1>
                            <p class="mt-3 font-weight-400" style="font-size: 16px; color: #426666">
                                Tingkatkan ke pengalaman liburan anda <br>
                            </p>
                        </div>

                        <div id="Produk" class="card-lp mt-5 mx-auto rounded" style="max-width: 1280px;">
                            <div class="card-body text-center" style="background-color:white; margin-top:94px">
                                <h3 class="font-weight-bold">
                                    Produk Kami
                                </h3>
                            </div>
                            <div class="card-body row justify-content-around" style="margin-top:94px">
                                <div class="col-md-4">
                                    <img class="img-fluid" width="30000" height="30000" src="https://images.unsplash.com/photo-1530629013299-6cb10d168419?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=867&q=80" alt="">
                                </div>
                                <div class="align-items-start col-6">
                                    <h3 class="text-black font-weight-600" style="font-size: 30px;">
                                        Excecutive
                                    </h3>
                                    <p class="font-weight-normal text-content text-grey" style="margin-top: 14px; font-size:16px;">
                                        ini excecutive
                                    </p>
                                </div>

                                <div class="card-body row justify-content-around" style="margin-top:94px">
                                    <div class="col-md-4">
                                        <img class="img-fluid" width="30000" height="30000" src="https://images.unsplash.com/photo-1505692433770-36f19f51681d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="">
                                    </div>
                                    <div class="align-items-start col-6">
                                        <h3 class="text-black font-weight-600" style="font-size: 30px;">
                                            Deluxe
                                        </h3>
                                        <p class="font-weight-normal text-content text-grey" style="margin-top: 14px; font-size:16px;">
                                            Ini kamar deluxe
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-lp mt-5 mx-auto rounded" style="max-width: 1280px;">
                                <div class="card-body row justify-content-around" style="margin-top:94px">
                                    <div class="col-md-4">
                                        <img class="img-fluid" width="30000" height="30000" src="https://images.unsplash.com/photo-1505693314120-0d443867891c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=918&q=80" alt="">
                                    </div>
                                    <div class="align-items-start col-6">
                                        <h3 class="text-black font-weight-600" style="font-size: 30px;">
                                            Standard
                                        </h3>
                                        <p class="font-weight-normal text-content text-grey" style="margin-top: 14px; font-size:16px; margin-right:57px;">
                                            Ini kamar standard
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- End Card -->

                    <div id="Harga" class="card-lp mt-5 mx-auto rounded" style="max-width: 1280px;">
                        <table class="room-prices">
                            <thead>
                                <tr>
                                    <th>Room Type</th>
                                    <th>Price per Night</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Standard Room</td>
                                    <td>$150</td>
                                </tr>
                                <tr>
                                    <td>Deluxe Room</td>
                                    <td>$250</td>
                                </tr>
                                <tr>
                                    <td>Executive Suite</td>
                                    <td>$450</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <div id="About-Us" class="card-lp mt-5 mx-auto rounded" style="max-width: 1280px;">
                        <div class="card-body text-center" style="background-color:white; margin-top:94px">
                            <h2 class="font-weight-bold">
                                Tentang Kami
                                </h3>
                                <p class="mt-3 font-weight-400" style="font-size: 16px; color: #426666">
                                    HOtel ABC
                                    <br>
                                    Alamat: ABC
                                    <br>
                                    Email: abc@abc.com
                                    <br>
                                    Telp: 021021021021
                                </p>
                        </div>
                    </div>

                </section>
            </div>
            <footer>
                <div class="simple-footer">
                    <!-- Copyright &copy; 2022 <div class="bullet"></div> All Rights Reserved -->
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chocolat/1.0.4/js/chocolat.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/index.js"></script>
</body>

</html>