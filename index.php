<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udinus Poliklinik</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #004080;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            height: 400px;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('assets/images/UDINUS.png') no-repeat center/cover;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 10px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .header h3 {
            font-weight: 300;
            margin-bottom: 20px;
        }

        .header marquee {
            position: absolute;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px;
            width: 100%;
        }

        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px auto;
            padding: 0 20px;
            flex-wrap: wrap;
        }

        .card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 340px;
            text-align: center;
            margin-bottom: 30px;
            padding: 10px;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        .card i {
            font-size: 48px;
            color: rgb(0, 255, 0);
            margin: 20px 0;
        }

        .card h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .card p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 25px;
        }

        .card .btn {
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            color: white;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: 600;
            background-color: #007bff;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }

        .card .btn:hover {
            background-color: #0056b3;
        }

        .client_section {
            padding: 50px 20px;
            background-color: #3c3939;
            text-align: center;
        }

        .heading_container h2 {
            font-size: 2rem;
            color: #17a2b8;
            margin-bottom: 30px;
            position: relative;
        }

        .heading_container h2::before {
            content: "";
            display: block;
            width: 1000px;
            height: 4px;
            background-color: #17a2b8;
            margin: 0 auto 15px;
        }

        .testimonial-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .testimonial-card {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin-bottom: 15px;
            height: 120px;
            width: 300px;
            background: white;
            text-align: left;
        }

        .testimonial-card:hover {
            transform: scale(1.02);
        }

        .testimonial-card img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #007bff;
        }

        .testimonial-card h6 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .testimonial-card .location {
            font-size: 0.8rem;
            color: #888;
            margin-bottom: 10px;
        }

        .testimonial-card .testimonial-text {
            font-size: 0.9rem;
            color: #555;
        }

        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        @media (max-width: 768px) {
            .testimonial-card {
                flex-direction: column;
                text-align: center;
                width: 100%;
            }

            .testimonial-card img {
                margin-bottom: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="header fade-in">
        <h1><u>Udinus Poliklinik</u></h1>
        <h3>Sistem Informasi Layanan Kesehatan</h3>
    </div>

    <div class="card-container fade-in">
        <div class="card">
            <i class="fas fa-hospital-user"></i>
            <h3>Pasien</h3>
            <p>Login untuk mendapatkan layanan kesehatan di Udinus Poliklinik.</p>
            <a href="loginUser.php" class="btn">Masuk</a>
        </div>
        <div class="card">
            <i class="fas fa-stethoscope"></i>
            <h3>Dokter</h3>
            <p>Login untuk mulai melayani pasien di Udinus Poliklinik.</p>
            <a href="login.php" class="btn">Masuk</a>
        </div>
    </div>

    <section class="client_section fade-in">
        <div class="heading_container">
            <h2>Testimoni Pelayanan</h2>
        </div>
        <div class="testimonial-container">
            <div class="testimonial-card">
                <img src="assets/images/rayhan.jpg" alt="Rayhan">
                <div>
                    <h6>Rayhan</h6>
                    <p class="location">Kendal</p>
                    <p class="testimonial-text">Penangannya Cepat Tanggap di Poliklinik Udinus.</p>
                </div>
            </div>
            <div class="testimonial-card">
                <img src="assets/images/dian.jpg" alt="Dian">
                <div>
                    <h6>Dian</h6>
                    <p class="location">Semarang</p>
                    <p class="testimonial-text">Pelayanan yang ramah dan responsif.</p>
                </div>
            </div>
            <div class="testimonial-card">
                <img src="assets/images/fian.png" alt="Fian">
                <div>
                    <h6>Fian</h6>
                    <p class="location">Boja</p>
                    <p class="testimonial-text">Layanan berobat yang praktis dilingkungan kampus.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="footer fade-in">
        &copy; Poliklinik-Udinus
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".fade-in");
            elements.forEach((el, index) => {
                setTimeout(() => {
                    el.style.opacity = "1";
                    el.style.transform = "translateY(0)";
                }, index * 200);
            });
        });
    </script>
</body>

</html>
