<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Calf Coffee</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<!-- <body class="contact-page-bg">: Kita memberi class khusus pada body agar style.css bisa memberi warna latar belakang abu-abu muda hanya di halaman ini. -->
<body class="contact-page-bg"> <header class="contact-header"> 
        <div class="container">
            <div class="contact-title">
                <h1>CONTACT US</h1>
                <p>HOME / CONTACT US</p>
            </div>
            
          <?php include 'header.php'; ?>

    <!-- <main class="contact-main">: Bagian utama yang berisi "kartu" informasi di tengah -->
    <main class="contact-main">
        <!-- <div class="contact-card">: "Kartu" putih di tengah yang berisi semua detail kontak.d -->
        <div class="contact-card">
            
            <h3>OFFICE INFORMATION</h3>
            <p class="card-subtitle">
                Completely recapitalize 24/7 communities via standards
                compliant metrics whereas.
            </p>

            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-phone-alt"></i> </div>
                <div class="info-text">
                    <strong>Phone Number & Email</strong>
                    <a href="tel:085133844720" class="blue-link">085133844720</a>
                    <span>kopicalff@gmail.com</span>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-map-marker-alt"></i> </div>
                <div class="info-text">
                    <strong>Our Office Address</strong>
                    <span>Jl. Tanjung No.5, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132</span>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-clock"></i> </div>
                <div class="info-text">
                    <strong>Official Work Time</strong>
                    <span>08:00 - 23:00</span>
                </div>
            </div>

        </div>
    </main>

    <script src="script.js"></script>

    <!-- footer -->

    <footer>
        <p>
            copyright &copy; 2025 Noval Fitriadi All rights reserved.
        </p>
    </footer>

</body>
</html>