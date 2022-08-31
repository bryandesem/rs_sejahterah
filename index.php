<DOCTYPE html>
<html lang="en">
    <head>
    <meta charset ='UTF-8'>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="X-UA-Compatible" content = "le-edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
        <link href="https://fontawesome.com/support" rel="stylesheet">
        <title>Data Rumah Sakit</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
                <a class="navbar-brand" href="#">Mini Project</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto" >
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?page=homeRuang"><i class="fa fa-bed"></i> Ruang</a>
                            
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?page=homePasien"><i class="fa fa-user fa-fw"></i>Pasien</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <p></p>
            <?php 
            $page = $_GET['page'] ?? '';
            $halaman = 'View/home.php';
            switch ($page){
                //Ruang
                case 'homeRuang';
                    $halaman = 'View/Ruang/home.php';
                    break;
                case 'registerRuang';
                    $halaman = 'View/Ruang/tambah.php';
                    break;
                case 'editRuang';
                    $halaman = 'View/Ruang/ubah.php';
                    break;
                case 'deleteRuang';
                    $halaman = 'View/Ruang/hapus.php';
                    break;
                //Pasien
                case 'homePasien';
                    $halaman = 'View/Pasien/home.php';
                    break;
                case 'registerPasien';
                    $halaman = 'View/Pasien/tambah.php';
                    break;
                case 'editPasien';
                    $halaman = 'View/Pasien/ubah.php';
                    break;
                case 'deletePasien';
                    $halaman = 'View/Pasien/hapus.php';
                    break;
            }
            include ($halaman); 
            ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </body>
</html>