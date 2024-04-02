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



function clickdropdown(e) {
    const dropdown = e.nextElementSibling;
    dropdown.classList.toggle('active');

    document.addEventListener('click', function(event) {
        const target = event.target;
        if (!dropdown.contains(target) && !e.contains(target)) {
            dropdown.classList.remove('active');
        }
    });
}

// addEventListener("scroll", (event) => {
//     const btnTop = document.querySelector("#products .up")
//     const btnTopLink = btnTop.querySelector(".btn-top")
//     if(window.scrollY > 100) {
//         btnTop.style.display = "flex";
//         btnTopLink.style.display = "flex";
//     }else {
//         btnTop.style.display = "none";
//     }
// });