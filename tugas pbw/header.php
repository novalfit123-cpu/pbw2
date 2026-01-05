<?php
  // Mencari tahu nama file yang sedang dibuka secara otomatis
  $current_page = basename($_SERVER['PHP_SELF']);
?>

<header>
    <div class="container nav-container">
        <div class="logo">
            <a href="index.php"><img src="aset/logo biru.png" alt="Logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">HOME</a></li>
                <li><a href="menu.php" class="<?php echo ($current_page == 'menu.php') ? 'active' : ''; ?>">MENU</a></li>
                <li><a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</header>