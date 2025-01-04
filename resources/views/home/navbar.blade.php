<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Medilab Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* General Styles */
    body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #62b6cb;
            
        }
        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #064663;
            color: white;
            padding: 8px 15px;
        }
        .navbar .logo {
            display: flex;
            align-items: center;
        }
        .navbar .logo img {
            height: 50px;
            margin-right: 10px;
        }
        .navbar h1 {
        margin: 0;
        font-size: 1.5em;
        color: #5BC0DE;
        }

        .navbar h1 span {
        color: white;
        font-weight: bold;
        }
        .navbar .menu {
            display: flex;
            gap: 10px;
        }
        .navbar .menu a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .navbar .menu a:hover {
            text-decoration: underline;
        }
        .navbar .user {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .navbar .user img {
            height: 20px;
            border-radius: 50%;
        }

    /* Buttons (Login & Registrasi) */
    .buttons {
      display: flex;
    }

    .buttons a {
      text-decoration: none;
      color: white;
      padding: 8px 15px;
      border: 1px solid #5BC0DE;
      border-radius: 5px;
      margin-left: 10px;
      transition: 0.3s;
    }

    .buttons a:hover {
      background-color: #5BC0DE;
      color: #00334E;
    }

    /* Footer Styles */
    footer {
    background-color: #121414;
    color: white;
    padding: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.footer-container {
    display: flex;
    justify-content: space-between;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}
.footer-left {
    display: flex;
    align-items: center;
}
.footer-left img {
    width: 120px;
    height: 120px;
    margin-right: 100px;
    margin-left: 90px;
}
.footer-right {
    text-align: left;
}
.footer-right h3 {
    margin-bottom: 20px;
}
.footer-right ul {
    list-style-type: none;
    padding: 0;
}
.footer-right ul li {
    margin-bottom: 20px;
}
.footer-right ul li a {
    color: white;
    text-decoration: none;
}
.footer-right ul li a:hover {
    text-decoration: underline;
}
</style>



  </style>
</head>

<body>

    <!-- Navbar Section -->
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('admin/dist/homepage/logo1.png')}}" alt="Logo Anak Sehat">
            <h1><span>Anak</span> Sehat</h1>
        </div>
        <div class="menu">
            <a href="{{ route('welcome') }}">🏠 Home</a>
            <a href="#">👶 Data Anak</a>
            <a href="{{ route('profilDokter') }}">🩺 Dokter</a>
            <a href="parameter.html">📆 Parameter</a>
            <a href="{{ route('konsulPengguna') }}">💬 Konsultasi</a>
        </div>
        @if (Route::has('login'))
      
      @auth
      <div class="user">
        <span>example@gmail.com</span>
        <img src="{{ asset('admin/dist/homepage/user.jpg')}}" alt="User">
      </div>
      
      @else
      <div class="buttons">
        <a href="{{ route('login') }}" class="login">Login</a>
        <a href="{{ route('register') }}" class="register">Registrasi</a>
      </div>

      @endauth
      @endif
    </div>