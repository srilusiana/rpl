<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Kesehatan Anak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body, html {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background-color: #00334E;
            color: white;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 2px solid #fff;
        }

        .navbar .logo {
            display: flex;
            align-items: center;
            margin-right: 15px;
        }

        .navbar .logo img {
            width: 50px;
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

        .navmenu ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navmenu ul li {
            margin-left: 20px;
        }

        .navmenu ul li a {
            text-decoration: none;
            color: white;
            font-size: 1em;
        }

        .navmenu ul li a:hover {
            color: #5BC0DE;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 350px;
            margin: 50px auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #0069d9;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 50px 10%;
            margin-top: auto;
        }
        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        .footer-left {
            max-width: 40%;
        }
        .footer-left h2 {
            margin-bottom: 10px;
            font-size: 1.5em;
        }
        .footer-left p {
            line-height: 1.6;
            font-size: 0.9em;
        }
        .footer-right h3 {
            margin-bottom: 10px;
            font-size: 1.2em;
        }
        .footer-right ul {
            list-style: none;
        }
        .footer-right ul li {
            margin: 8px 0;
        }
        .footer-right ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer-right ul li a:hover {
            color: #1ca3ec;
        }
        .footer-bottom {
            margin-top: 20px;
            text-align: center;
            border-top: 1px solid #555;
            padding-top: 15px;
        }
        .footer-bottom .social-icons a {
            color: #fff;
            font-size: 1.2em;
            margin: 0 8px;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer-bottom .social-icons a:hover {
            color: #1ca3ec;
        }
    </style>
</head>
<body>
    <!-- Navbar Baru -->
    <header id="header" class="header sticky-top">
        <div class="navbar">
            <div class="logo">
                <img src="{{ asset('admin/dist/homepage/logo1.png')}}" alt="Logo">
                <h1><span>Anak</span> Sehat</h1>
            </div>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#">🏠 Home</a></li>
                    <li><a href="#">📋 Data Anak</a></li>
                    <li><a href="#">🩺 Dokters</a></li>
                    <li><a href="#">💬 Forum Diskusi</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <!-- Form Login -->
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <x-input-label for="username" :value="__('Username')" />
                <x-text-input id="username" type="text" name="username" required autofocus autocomplete="username" placeholder="Masukkan Username" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" 
                                placeholder="Masukkan Password"/>
    
                <x-input-error :messages="$errors->get('password')"/>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    
 <!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-left" style="display: flex; align-items: center;">
            <!-- Gambar Ditambahkan di Sini -->
            <img src="{{ asset('admin/dist/homepage/logo1.png')}}" alt="Gambar Direktorat" style="width: 80px; height: 100px; margin-right: 80px;">
            <div>
                <h2>Direktorat Gizi dan KIA</h2>
                <p>Jl. H.R. Rasuna Said Blok X-5 Kav. 4-9<br>Jakarta 12950, Indonesia</p>
                <p><strong>Phone:</strong> 021-5221227<br><strong>Fax:</strong> 021-5203984</p>
            </div>
        </div>
        <div class="footer-right">
            <h3>Link Terkait</h3>
            <ul>
                <li><a href="#">>Sesditjen Kesehatan Masyarakat</a></li>
                <li><a href="#">>Direktorat Gizi Masyarakat</a></li>
                <li><a href="#">>Direktorat Kesehatan Lingkungan</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
