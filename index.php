<?php
$page = $_GET['page'] ?? 'home';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Moja strona ZMODYFIKOWANA</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
</head>
<body>
    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=zdjecia">Zdjęcia</a>
        <a href="?page=kontakt">Kontakt</a>
    </nav>

    <div id="content">
        <?php
        switch ($page) {
            case 'home':
                echo '<h1 style="color:blue;">TO JEST  Zmodyfikowana strona </h1>';
                echo '<h2 style="color:green;"> Wybierz opcję zdjecia :))</h2>';
                break;

            case 'zdjecia':
                include 'zdjecia.php';
                break;

            case 'kontakt':
                include 'kontakt.php';
                break;
        }
        ?>
    </div>

    <footer>
        <p>&copy; 2023 Mariusz Gola. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
