<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <style>
  :root {
    --baseurl: "<?= base_url() ?>";
  }
  </style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/fontawesome-4/css/all.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/1cak/1cak-icon/styles.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?= base_url() ?>/assets/1cak/1cak-logowhite.svg"
          style="margin-bottom: .125em;" height="30" alt=""></a>

      <div class="dropdown">
        <form class="form-inline my-2 my-lg-0 d-none d-lg-block">
          <input class="form-control rounded-pill border-0 search-nav" type="search" placeholder="Search"
            aria-label="Search">
        </form>

        <div class="dropdown-menu mt-3" id="search-dropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="CategoryDropDown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <!-- <i class="onecak tag fw mr-1"></i> -->
              <i class="fas fa-tag fa-fw mr-1"></i>Kategori
            </a>
            <div class="dropdown-menu mt-3" aria-labelledby="CategoryDropDown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <a class="nav-item nav-link active text-light" href="#">
            <i class="onecak shuffle fw mr-1"></i>Shuffle</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container mt-2">
    <div class="row">
      <div class="col col-md-2 d-none d-lg-block">
        <ul class="category-pc">
          <li class="sub selected"><a href=""><i class="onecak pac-man fw mr-1"></i>Segar</a></li>
          <li class="sub"><a href=""><i class="onecak fire fw mr-1"></i>Trending</a></li>
          <li class="sub"><a href=""><i class="onecak new fw mr-1"></i>Terbaru</a></li>
          <li class="sub"><a href=""><i class="onecak crown fw mr-1"></i>Legenda</a></li>
          <li class="sub"><a href=""><i class="onecak video fw mr-1"></i>GIF dan Video</a></li>
          <li class="sub"><a href=""><i class="onecak pepoles fw mr-1"></i>Follower Anda</a></li>
        </ul>
        <a href="" class="blank-btn">Dapatkan Kategori Lain</a>
      </div>

      <div class="col col-md-7 col-sm-12">

      </div>


    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>/assets/bootstrap-4/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/script.js"></script>
</body>

</html>