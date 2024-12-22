<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('assets/css/johndoe.css') }}">
    <style>
        /* CSS dari johndoe.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .header {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .about-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .about-section .profile {
            flex: 1;
            margin: 10px;
            text-align: center;
        }

        .about-section .profile img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .about-section .profile h3 {
            margin: 10px 0 5px;
            font-size: 1.5em;
            color: #34495e;
        }

        .about-section .profile p {
            font-size: 1em;
            color: #7f8c8d;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <header class="header">
        <h1>About Us</h1>
    </header>

    <div class="container">
        <section class="about-section">
            <div class="profile">
                <img src="https://via.placeholder.com/150" alt="Profile Picture">
                <h3>Prizy Aditia Fitra</h3>
                <p>NIM: C030323046<br>Program Studi: Teknik Informatika<br>Mata Kuliah: Desain Web</p>
            </div>
            <div class="profile">
                <img src="https://via.placeholder.com/150" alt="Profile Picture">
                <h3>Ahmad Rona Fatahilah</h3>
                <p>NIM: C030323074<br>Program Studi: Teknik Informatika<br>Mata Kuliah: Desain Web</p>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Sistem Informasi Penerimaan dan Pendistribusian Donasi</p>
    </footer>
</body>

</html>