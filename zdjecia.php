<div id="slider">
    <?php
    $files = glob("images/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
    foreach($files as $file) {
        echo '<img class="slide" src="' . $file . '">';
    }
    ?>
</div>
<div id="button-container">
    <button id="prev">Poprzednie</button>
    <button id="next">Następne</button>
    <button id="play">Start</button>
    <button id="pause" style="display: none;">Stop</button>
</div>
