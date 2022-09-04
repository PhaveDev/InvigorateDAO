function nav() {
    var icon = document.getElementById('open');
    var navCover = document.getElementById('nav_cover');

    if (navCover.style.display == 'none') {
        icon.src = './icons/close-window-256.png';
        navCover.style.display = 'block';
    } else {
        navCover.style.display = 'none';
        icon.src = './icons/menu_open.png';
    }
};