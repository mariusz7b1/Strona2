<?php
$allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
$dir = __DIR__ . '/images';
$files = [];
if (is_dir($dir)) {
    foreach (scandir($dir) as $f) {
        if (in_array(strtolower(pathinfo($f, PATHINFO_EXTENSION)), $allowed, true)) {
            $files[] = $f;
        }
    }
}
natcasesort($files);
$files = array_values($files);
?>
<h1>Zdjęcia</h1>
<?php if (!$files): ?>
<p>Brak zdjęć w folderze <code>images/</code>.</p>
<?php else: ?>
<div id="viewer">
    <div id="slider">
<?php foreach ($files as $i => $f): ?>
        <img class="slide<?= $i === 0 ? ' active' : '' ?>" src="images/<?= rawurlencode($f) ?>" alt="<?= htmlspecialchars($f) ?>">
<?php endforeach; ?>
    </div>
    <p id="caption"></p>
    <div id="controls">
        <button id="prev" type="button">&lsaquo; Poprzednie</button>
        <button id="toggle" type="button">Start</button>
        <button id="next" type="button">Następne &rsaquo;</button>
    </div>
    <div id="thumbs">
<?php foreach ($files as $i => $f): ?>
        <img class="thumb" data-index="<?= $i ?>" src="images/<?= rawurlencode($f) ?>" alt="" loading="lazy">
<?php endforeach; ?>
    </div>
</div>
<?php endif; ?>
