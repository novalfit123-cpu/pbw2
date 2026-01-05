<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Calf Coffee</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <!-- navbar -->
    <?php include 'header.php'; ?>
    

    <main class="menu-page container">
        
        <!-- tombol food dan coffee -->

        <!-- <div class="menu-filters">: Kode yang berisi dua tombol filter ("COFFEE" dan "FOOD"). -->
        <div class="menu-filters">
            <a href="#" class="filter-tab active" data-target="coffee-section">COFFEE</a>
            <a href="#" class="filter-tab" data-target="food-section">FOOD</a>
        </div>

        <!-- menu cofeee section -->

        <section id="coffee-section" class="menu-section active">
            
            <div class="section-header">
                <span class="pill">COFFEE MENU</span>
                <h2>OUR COFFEE</h2>
            </div>

            <div class="menu-container">
                <aside class="menu-pricelist">
                    <img src="aset/Calf mlg.jpg" alt="Calf Coffee Sign" class="pricelist-img">

                    <!-- menu coffee disamping kiri -->
<ul>
    <?php foreach ($coffee_items as $item) : ?>
        <li><span><?php echo $item['nama']; ?></span> <span class="price"><?php echo $item['harga']; ?></span></li>
    <?php endforeach; ?>
</ul>
                   
                <!-- menu coffee -->
<?php 
// 1. Data untuk Menu Coffee
$coffee_items = [
    ["nama" => "oat premium", "harga" => "25k", "img" => "calf premium.jpg", "star" => 5, "new" => true],
    ["nama" => "caramel machiato", "harga" => "17k", "img" => "frapucino.jpg", "star" => 4, "new" => true],
    ["nama" => "butterscoth machiato", "harga" => "27k", "img" => "calf regular.jpg", "star" => 5, "new" => false],
    ["nama" => "americano", "harga" => "20k", "img" => "lemon.jpg", "star" => 3, "new" => false],
    ["nama" => "magic coffee", "harga" => "27k", "img" => "dark choco.jpg", "star" => 4, "new" => true],
    ["nama" => "magic tiramisu", "harga" => "27k", "img" => "banana.jpg", "star" => 4, "new" => false],
    ["nama" => "kopi susu gula aren", "harga" => "15k", "img" => "calf premium. jpg", "star" => 4, "new" => true],
];
?>
<div class="menu-grid">
    <?php foreach ($coffee_items as $item) : ?>
        <div class="menu-item-card">
            <div class="img-container">
                <img src="aset/<?php echo $item['img']; ?>" alt="<?php echo $item['nama']; ?>">
                <?php if ($item['new']) : ?>
                    <span class="badge new">NEW</span>
                <?php endif; ?>
            </div>
            <div class="stars">
                <?php echo str_repeat("★", $item['star']); ?>
            </div>
            <h4><?php echo $item['nama']; ?></h4>
            <span class="price"><?php echo $item['harga']; ?></span>
        </div>
    <?php endforeach; ?>
</div>
               
                <!--menu section food  -->

        <section id="food-section" class="menu-section">
            
            <div class="section-header">
                <span class="pill">FOOD MENU</span>
                <h2>OUR DELICIOUS FOODS</h2>
            </div>

            <div class="menu-container">
                <aside class="menu-pricelist">
                    <img src="aset/Calf mlg.jpg" alt="Calf Coffee Sign" class="pricelist-img">

                    <!-- menu food disamping -->
                    <ul>
                        <li><span>pisang goreng</span> <span class="price">15k</span></li>
                        <li><span>pudding coffee cream</span> <span class="price">18k</span></li>
                        <li><span>nasi telur</span> <span class="price">20k</span></li>
                        <li><span>dimsum mentai</span> <span class="price">23k</span></li>
                        <li><span>bolognese french fries</span> <span class="price">22k</span></li>
                        <li><span>nasi paru balado</span> <span class="price">27k</span></li>
                    </ul>
                </aside>

                <!-- menu food -->

                <div class="menu-grid">
                    <div class="menu-item-card">
                        <div class="img-container">
                            <img src="aset/roti kukus.jpg" alt="Roti Kukus Ice Cream">
                        </div>
                        <div class="stars">★★★★</div>
                        <h4>roti kukus ice cream</h4>
                        <span class="price">20k</span>
                    </div>
                    <div class="menu-item-card">
                        <div class="img-container">
                            <img src="aset/nasi.jpg" alt="Short Plate Mushroom">
                            <span class="badge new">NEW</span>
                        </div>
                        <div class="stars">★★★★</div>
                        <h4>Short Plate Mushroom</h4>
                        <span class="price">31k</span>
                    </div>
                    <div class="menu-item-card">
                        <div class="img-container">
                            <img src="aset/puding.jpg" alt="Puding Caramel">
                        </div>
                        <div class="stars">★★★★★</div>
                        <h4>puding caramel</h4>
                        <span class="price">15k</span>
                    </div>
                    <div class="menu-item-card">
                        <div class="img-container">
                            <img src="aset/nasi ciken.jpg" alt="Chicken Creamy Garlic">
                        </div>
                        <div class="stars">★★★★</div>
                        <h4>chicken creamy garlic</h4>
                        <span class="price">25k</span>
                    </div>
                    <div class="menu-item-card">
                        <div class="img-container">
                            <img src="aset/dimsum moza.jpg" alt="Dimsum Mozarella">
                            <span class="badge new">NEW</span>
                        </div>
                        <div class="stars">★★★</div>
                        <h4>dimsum mozarella</h4>
                        <span class="price">22k</span>
                    </div>
                    <div class="menu-item-card">
                        <div class="img-container">
                            <img src="aset/kentang.jpg" alt="French Fries">
                        </div>
                        <div class="stars">★★★</div>
                        <h4>french fries</h4>
                        <span class="price">20k</span>
                    </div>
                </div> </div> </section>

    </main>

    <script src="script.js"></script>

    <footer>
    <p>
        copyright &copy; <?php echo date("Y"); ?> Noval Fitriadi All rights reserved.
    </p>
</footer>

</body>
</html>