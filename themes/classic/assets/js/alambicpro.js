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
            image.classList.remove("lazy");
            imageObserver.unobserve(image);
          }
        });
      });
  
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
          var scrollTop = window.pageYOffset;
          lazyloadImages.forEach(function(img) {
              if(img.offsetTop < (window.innerHeight + scrollTop)) {
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
      // Remove active class from all links
      console.log(item)
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
  console.log(dropdownLinks)

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
