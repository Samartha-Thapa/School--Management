function applyTheme(theme) {
    document.body.classList.toggle('dark', theme === 'dark');
    document.body.classList.toggle('light', theme === 'light');
    localStorage.setItem('theme', theme);
}

document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme') || 'light';
    applyTheme(savedTheme);
    document.body.style.display = '';
});

let themeBtns = document.getElementsByClassName('theme-manager-btn');

for (let i = 0; i < themeBtns.length; i++) {
    themeBtns[i].addEventListener('click', () => {
        const currentTheme = document.body.classList.contains('dark') ? 'dark' : 'light';
        applyTheme(currentTheme === 'dark' ? 'light' : 'dark');
    });
}
