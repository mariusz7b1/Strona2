<?php
$pages = ['home' => 'Start', 'zdjecia' => 'Zdjęcia', 'kontakt' => 'Kontakt'];
$page = $_GET['page'] ?? 'home';
if (!is_string($page) || !isset($pages[$page])) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pages[$page] ?> – przeglądarka zdjęć (test)</title>
    <link rel="stylesheet" href="css/style.css">
<?php if ($page === 'zdjecia'): ?>
    <script src="js/main.js" defer></script>
<?php endif; ?>
</head>
<body>
    <nav>
<?php foreach ($pages as $key => $label): ?>
        <a href="?page=<?= $key ?>"<?= $key === $page ? ' class="active"' : '' ?>><?= $label ?></a>
<?php endforeach; ?>
    </nav>

    <main id="content">
<?php if ($page === 'home'): ?>
        <h1>Strona testowa</h1>
        <p>Przeglądarka zdjęć z folderu <code>images/</code>.</p>
        <p><a class="button" href="?page=zdjecia">Przejdź do zdjęć</a></p>
<?php else: ?>
<?php include __DIR__ . '/' . $page . '.php'; ?>
<?php endif; ?>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> Mariusz Gola. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
