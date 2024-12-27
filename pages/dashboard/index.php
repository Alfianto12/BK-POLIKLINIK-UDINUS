<!DOCTYPE html> <!------INDEX PASIEN-------->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kesehatan Udinus</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;  /* Light grayish background */
            color: #495057;  /* Dark gray for text */
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex: 1;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 1s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /*---------------------------------- */
        .floating-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            background-color: #17a2b8;  /* Soft gray */
            color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }

        .floating-container img {
            max-width: 200px;
            margin-right: 20px;
            border-radius: 10px;
        }

        .floating-container div {
            max-width: 600px;
        }

        .floating-container h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .floating-container p {
            font-size: 1rem;
            margin: 10px 0;
        }
        /*---------------------------------- */

        .header-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .header-section h2 {
            color: #17a2b8;
        }

        .header-section p {
            color: #555;
            font-size: 1rem;
            margin: 10px 0;
        }

        .list-section {
            margin: 20px 0;
        }

        .list-section h2 {
            text-align: center;
            color: #17a2b8;
        }

        .service-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            padding: 0;
            list-style: none;
            margin-top: 30px;
        }

        .service-list li {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 15px 20px;
            text-align: center;
            width: 280px;
            transition: transform 0.3s ease-in-out;
            position: relative;
        }

        .service-list li:hover {
            transform: translateY(-10px);
        }

        .service-list li i {
            font-size: 2.5rem;
            color: rgb(194, 12, 12);
            margin-bottom: 10px;
        }

        .service-list li span {
            display: block;
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .service-list li button {
            background-color: #17a2b8;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .service-list li button:hover {
            background-color: #117a8b;
        }

        .service-details {
            display: none;
            margin-top: 10px;
            font-size: 0.9rem;
            color: #555;
        }

        @media (max-width: 768px) {
            .service-list li {
                width: 100%;
            }

            .floating-container {
                flex-direction: column;
                text-align: center;
            }

            .floating-container img {
                margin: 0 auto 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Floating Container -->
        <div class="floating-container fade-in">
            <img src="https://ulasan.co/wp-content/uploads/2023/10/Dokter-Spesialis.jpg" alt="Gambar Layanan">
            <div>
                <h2>Layanan Kesehatan Terbaik</h2>
                <p>Kami menyediakan layanan kesehatan yang lengkap dan modern untuk mendukung kesejahteraan Anda. Dari konsultasi hingga pengobatan, kami hadir untuk melayani dengan hati.</p>
            </div>
        </div>

        <!-- List Section -->
        <section class="list-section fade-in" style="animation-delay: 0.5s;">
            <h2>Layanan Kami</h2>
            <ul class="service-list">
                <li>
                    <i class="fas fa-calendar-day"></i>
                    <span>Layanan Medis Umum</span>
                    <button onclick="toggleDetails(this)">Info</button>
                    <div class="service-details">Kami menyediakan konsultasi dan pengobatan untuk berbagai masalah kesehatan umum.</div>
                </li>
                <li>
                    <i class="fas fa-clipboard-list"></i>
                    <span>Pemeriksaan Spesialis</span>
                    <button onclick="toggleDetails(this)">Info</button>
                    <div class="service-details">Pemeriksaan mendalam dengan dokter spesialis di berbagai bidang kesehatan.</div>
                </li>
                <li>
                    <i class="fas fa-hospital"></i>
                    <span>Fasilitas Kesehatan Modern</span>
                    <button onclick="toggleDetails(this)">Info</button>
                    <div class="service-details">Kami memiliki fasilitas modern untuk mendukung diagnosis dan pengobatan yang akurat.</div>
                </li>
                <li>
                    <i class="fas fa-comments"></i>
                    <span>Konsultasi Kesehatan</span>
                    <button onclick="toggleDetails(this)">Info</button>
                    <div class="service-details">Dapatkan konsultasi langsung dengan dokter untuk berbagai kebutuhan kesehatan Anda.</div>
                </li>
                <li>
                    <i class="fas fa-heartbeat"></i>
                    <span>Program Kesehatan Preventif</span>
                    <button onclick="toggleDetails(this)">Info</button>
                    <div class="service-details">Kami menawarkan program untuk mencegah penyakit dan meningkatkan gaya hidup sehat.</div>
                </li>
            </ul>
        </section>
    </div>

    <!-- FontAwesome untuk ikon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script>
        function toggleDetails(button) {
            const details = button.nextElementSibling;
            if (details.style.display === "block") {
                details.style.display = "none";
            } else {
                details.style.display = "block";
            }
        }
    </script>
</body>

</html>
