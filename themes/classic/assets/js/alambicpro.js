function smoothScroll(event) {
    event.preventDefault();
    const targetId = event.target.getAttribute('href');
    const sectionId = targetId.split('/#')[1];

    // Check if we are already on the home page
    if (window.location.pathname === '/en/' || window.location.pathname === '/ef/' || window.location.pathname === '/es/' || window.location.pathname === '/pt/') {
        const targetElement = document.getElementById(sectionId);
        if (targetElement) {
            const offsetTop = targetElement.offsetTop;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    } else {
        window.location.href = '/#' + sectionId;
    }
}
