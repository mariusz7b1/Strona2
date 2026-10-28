(() => {
    const slides = Array.from(document.querySelectorAll('.slide'));
    if (!slides.length) return;

    const thumbs = Array.from(document.querySelectorAll('.thumb'));
    const caption = document.getElementById('caption');
    const toggle = document.getElementById('toggle');
    const DELAY = 3000;
    let current = 0;
    let timer = null;

    function show(index) {
        current = (index + slides.length) % slides.length;
        slides.forEach((s, i) => s.classList.toggle('active', i === current));
        thumbs.forEach((t, i) => t.classList.toggle('active', i === current));
        caption.textContent = `${current + 1} / ${slides.length} – ${slides[current].alt}`;
    }

    function play() {
        if (timer) return;
        timer = setInterval(() => show(current + 1), DELAY);
        toggle.textContent = 'Stop';
    }

    function stop() {
        clearInterval(timer);
        timer = null;
        toggle.textContent = 'Start';
    }

    function go(index) {
        const playing = timer !== null;
        stop();
        show(index);
        if (playing) play();
    }

    document.getElementById('prev').addEventListener('click', () => go(current - 1));
    document.getElementById('next').addEventListener('click', () => go(current + 1));
    toggle.addEventListener('click', () => (timer ? stop() : play()));
    thumbs.forEach(t => t.addEventListener('click', () => go(Number(t.dataset.index))));

    document.addEventListener('keydown', e => {
        if (e.key === 'ArrowLeft') go(current - 1);
        else if (e.key === 'ArrowRight') go(current + 1);
        else if (e.key === ' ') { e.preventDefault(); timer ? stop() : play(); }
    });

    show(0);
    if (slides.length > 1) play();
})();
