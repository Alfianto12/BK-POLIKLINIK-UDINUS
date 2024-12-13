<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(135deg, #517f5a, #a1c4fd);
        }

        .login-container {
            display: flex;
            max-width: 1200px;
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease;
        }

        .left-container {
            flex: 1;
            overflow: hidden;
        }

        .left-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right-container {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-form {
            max-width: 400px;
            margin: 0 auto;
        }

        .login-form h4 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
            font-weight: bold;
        }

        .login-form label {
            font-weight: bold;
            color: #34495e;
            margin-bottom: 6px;
        }

        .login-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 4px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .login-form input:focus {
            outline: none;
            border: 2px solid #588163;
            box-shadow: 0 0 8px rgba(88, 129, 99, 0.4);
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #588163, #72b388);
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s;
        }

        .login-form button:hover {
            background: #517f5a;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
        }

        .register-link a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        /* Animasi */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="left-container">
            <img src="assets/images/loginAdmin.jpg" alt="Login Image">
        </div>
        <div class="right-container">
            <div class="login-form">
                <h4 class="text-center">Login </h4>
                <p class="login-box-msg text-center">Lakukan login <b class="text-success">Dokter</b> untuk melayani</p>
                <br><br>
                <form action="pages/login/checkLogin.php" method="post">
                    <label for="nama">Username :</label>
                    <input type="text" class="form-control" name="username" required>

                    <label for="no_hp">Password :</label>
                    <input type="password" class="form-control" name="password" required>

                    <button type="submit" class="btn btn-block btn-success">
                        Masuk
                    </button>
                </form>

            </div>
            <div class="text-center mt-3"> <a href="loginUser.php"><span
                        class="text-primary">Pasien klik disini</span></a>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
</script>
</body>

</html>