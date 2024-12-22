<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, rgba(53, 111, 220, 0.8), rgba(248, 215, 218, 0.8)),
                url('assets/imgs/headerr.png');
            background-size: cover;
            /* Mengatur gambar untuk menutupi seluruh area */
            background-position: center;
            /* Memposisikan gambar di tengah */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .login-container {
            background-color: white;
            width: 100%;
            max-width: 400px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login-container h1 {
            margin-bottom: 20px;
            color: rgb(79, 186, 212);
            font-size: 24px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: rgb(79, 186, 212);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: rgb(64, 61, 192);
        }

        .login-container p {
            margin-top: 20px;
            font-size: 14px;
            color: #6c757d;
        }

        .login-container a {
            color: #007bff;
            text-decoration: none;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>LOGIN</h1>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don’t have an account? <a href="{{ route('register') }}">Register Now</a></p>
    </div>
</body>

</html>