<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <title>Rasa Kopi</title>
</head>
<body>

<!-- Start Nav  -->
<div class="container">
<nav class="navbar navbar-expand-lg" style="background-color: #164138;">
  <div class="container-fluid">
    <!-- VELASANS FONT RASAKOPI -->
    <a class="navbar-brand" href="#">
      <img src="{{ asset('assets/images/Rasakopi-logo.png') }}" alt="Bootstrap" width="30" height="24">
    </a>
    <a class="navbar-brand" href="#"><span class="navbar-brand mb-0 h1 text-white" id="raskop-text">RASA KOPI</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
      </div>
    </div>
  </div>
</nav>
</div>
<!-- End Nav -->

<!--  -->
<div class="container">
<section id="hero">
    <div class="hero-container">
      <h1 style="font-family: 'DM Sans', sans-serif;"><b>RASA KOPI</b></h1>
      <h2 class="transisi-text">Kenang masanya, simpan rasanya</h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
</section>
</div>
<!--  -->

<!--  -->

<div class="container  mt-5 text-left">
  <h1>Reservasi</h1>  
  <div class="row">
    <div class="col">
      <h2>A</h2>
      <img src="{{ asset('assets/images/Proyek Baru.png') }}" width="320px" alt="">
      <div>  
            <button class="btn btn-success" style="width: 320px;">Reservasi Now</button>
        </div>
    </div>
    <div class="col">
        <h2>B</h2>
        <img src="{{ asset('assets/images/Proyek Baru.png') }}" width="320px" alt="">
        <div>  
            <button class="btn btn-success" style="width: 320px;">Reservasi Now</button>
        </div>
    </div>
  </div>
</div>
<!--  -->

<!--  -->
<div class="container mt-5">

</div>
<!--  -->



 
{{-- <div class="container text-center mt-5">
  <div class="row">
    <div class="col-4">
      1 of 2
    </div>
    <div class="col-8">
        <h2 style="text-align: left;"><b>SELAMAT DATANG DI <span class="text-success">RASA KOPI</span></b></h2>
        <h6  style="text-align: left;">Kenang masanya simpan rasanya</h6>
        <p class="mt-4" style="text-align: left;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto maiores, corrupti veritatis animi expedita distinctio suscipit, soluta numquam deleniti velit qui, blanditiis dolores quod magni adipisci cupiditate maxime dolore tempora!</p>
        <button class="btn btn-success" style="float: left;" >Reservasi Here</button>
    </div>
  </div>
</div> --}}

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>