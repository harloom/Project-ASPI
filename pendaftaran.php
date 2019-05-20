<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      LOMBA FOTOGRAFI
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
      name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
  </head>

  <body class="landing-page sidebar-collapse">
    <!-- navigitaion -->
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
      id="sectionsNav">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="">
            FOTOGRAFI CONTEST </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="index.php" onclick="scrollToDownload()" type="">
                <i class="fa fa-home "></i> Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="" target="_blank"
                data-original-title="Follow us on Twitter">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="" target="_blank"
                data-original-title="Like us on Facebook">
                <i class="fa fa-facebook-square"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="" target="_blank"
                data-original-title="Follow us on Instagram">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!--  -->
    <div class="page-header header-filter"
      style="background-image: url('assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title">Selamat Datang Peserta Kontes FotoGrafi</h2>
            <h4>Pasti Sudah Menyiapkan Semua Dokumen</h4>
            <br>
          </div>
        </div>
      </div>
    </div>
    <!-- / -->
    <div class="main main-raised bg-info">
      <div class="container">
        <div class="row">
          <div class="card card-login">
            <form class="form" method="POST" action="">
              <div class="card-header card-header-success text-center">
                <h4 class="card-title">Form pendaftaran</h4>
              </div>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="First Name...">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">nature_people</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Last Name...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">group</i>

                    </span>
                  </div>

                  <select class="form-control selectpicker" data-style="btn btn-link" id="jenis_kelamin">
                    <option>Pria</option>
                    <option>Wanita</option>
                  </select>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">email</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">phone</i>
                    </span>
                  </div>
                  <input type="number" class="form-control" placeholder="No Handphone...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">location_on</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Alamat...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">location_city</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Asal Kota...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons"></i>
                    </span>
                  </div>
                  <h4 class="h5"> Masukan Foto KTP</h4>
                </div>


                <div class="input-group form-file-upload form-file-multiple">
                  <div class="input-group-prepend ">
                    <span class="input-group-text">
                      <i class="material-icons">attach_file</i>
                    </span>
                  </div>
                  <input type="file" class="inputFileHidden" id="ktp_foto">
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons"></i>
                    </span>
                  </div>
                  <h4 class="h5"> Masukan Foto Kontes Dibawah</h4>
                </div>

                <div class="input-group form-file-upload form-file-multiple">
                  <div class="input-group-prepend ">
                    <span class="input-group-text">
                      <i class="material-icons">attach_file</i>
                    </span>
                  </div>
                  <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>
                  <input name="foto_kontes[]" type="file" multiple="" class="inputFileHidden" id="foto_kontes">
                </div>
              </div>
              <script>
                let foto_kontes = document.getElementById("foto_kontes");

                foto_kontes.addEventListener("change", () => {
                  if (foto_kontes.files.length > 5) {
                    alert("You can select only 5 images");
                    foto_kontes.value = "";
                  }
                });
              </script>



              <div class="footer text-center">
                <button href="#" class="btn btn-success btn-round m-5" type="submit">
                  <i class="material-icons">favorite</i> Send
                </button>
              </div>
            </form>



          </div>
        </div>
      </div>






















    </div>
    <footer class="footer footer-default">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license">
                Licenses
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="https://facebook.com/ilhambasket" target="_blank">Harloom</a> for a better web.
        </div>
      </div>
    </footer>



    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

    <!--Dropzone.Js-->
    <script src="assets/js/dropzone.js"></script>

    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  </body>

</html>