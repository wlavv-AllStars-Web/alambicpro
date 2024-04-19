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
  if(window.screen.width < 769  && isTouchDevice()) {
    const dropdown = e.nextElementSibling;
    dropdown.classList.toggle('active');

    document.addEventListener('click', function(event) {
        const target = event.target;
        if (!dropdown.contains(target) && !e.contains(target)) {
            dropdown.classList.remove('active');
        }
    });
  }
}

function isTouchDevice() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
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

document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;    

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    },{rootMargin: "100px"});

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {  
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.scrollY;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop + 100)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})


  // Function to toggle active class
document.querySelectorAll('.menu_list .menu-item').forEach(item => {
  item.addEventListener('click', function() {

      document.querySelectorAll('.menu_list .menu-item').forEach(link => {
          link.classList.remove('active');
      });
      // Add active class to the clicked link
      this.classList.add('active');
  });
});


document.addEventListener("DOMContentLoaded", function() {
  // Get all dropdown content <a> tags
  var dropdownLinks = document.querySelectorAll(".dropdown-content a");

  // Check if any of the dropdown links have the class "activeLink"
  var hasActiveLink = false;
  dropdownLinks.forEach(function(link) {
      if (link.classList.contains("activeLink")) {
          hasActiveLink = true;
          return;
      }
  });

  // If any dropdown link has the class "activeLink", add the class "active" to the .menu-item.dropdown element
  if (hasActiveLink) {
      var dropdownItem = document.querySelectorAll(".menu-item.dropdown");
      dropdownItem.forEach((item,i) => {
        dropdownItem[1].classList.add("active");
      });
  }
});


document.addEventListener("DOMContentLoaded", function() {
  const menuIcon = document.querySelector("#menu-icon");
  const menuIconIcon = document.querySelector("#menu-icon i");

  menuIcon.addEventListener("click", () => {
    updateMenuIcon(); 
  });

  function updateMenuIcon() {
    const header = document.querySelector("#header");
    const isOpen = header.classList.contains("is-open");
    if (isOpen) {
      menuIconIcon.innerHTML = "\ue5d2"; // Change to close icon
    } else {
      menuIconIcon.innerHTML = "\ue5cd"; // Change to open icon
    }
  }
});


document.addEventListener("scroll", () => {
  scrollFunction()
});


function scrollFunction() {
  const btnTop = document.querySelector(".btn-back-top");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    btnTop.style.display = "flex";
  } else {
    btnTop.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 


document.addEventListener("DOMContentLoaded", () => {
  let prependNumber = 1;
      const swiper = new Swiper('.swiper', {
        slidesPerView: 2,
        centeredSlides: false,
        spaceBetween: 0,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          type: 'fraction',
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 0,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 0,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 0,
          },
          1600: {
            slidesPerView: 3,
            spaceBetween: 0,
          },
        },
      });
  });