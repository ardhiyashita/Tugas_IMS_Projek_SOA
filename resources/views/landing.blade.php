<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="newStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <title>Home Page</title>
</head>

<body>
    <div class="desktop">
        <nav>
            <div class="logo">
                HealingTime
            </div>
            <ul>
                <li class="movie"><a href="index.php">Search</a></li>
                <li class="series"><a href="crud.php">CRUD</a></li>
                <li class="cartoon"><a href=""></a></li>
                <li class="anime"><a href=""></a></li>
            </ul>
            <div class="search" style="left: 1350px;"></div>
            <div class="notification" style="left: 1400px;"></div>
        </nav>

    
        <div class="white-line" style="margin-top: 5rem;">

        <div class="container" style="background: #A71C1C; border-radius:16px">
            <div class="row mt-2 justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-center my-3" style="color: white;">Search Movie</h1>
                    <!--Bisa diubah-->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Movie Anda" id="search-input">
                        <!--Bisa diubah-->
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="button" id="search-button">Submit!</button>
                        </div>
                    </div>
                </div>
            <!-- </div> -->            

            
            <div class="row" id="movie-list" style="width: 80%; border-radius:32px">
                <!--Resiko diubah idnya hrs ubah juga di script.js baris 15-->

            </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>