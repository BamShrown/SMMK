// Navbar Sticky


// let lastScrollTop = 0; // Variable to store the last scroll position
// const scrollThreshold = 200; // Set a threshold for scrolling down to hide the header

// window.addEventListener('scroll', function() {
//   let currentScroll = window.pageYOffset || document.documentElement.scrollTop; // Get current scroll position

//   if (currentScroll > lastScrollTop && currentScroll > scrollThreshold) {
//     // Scrolling down and past the threshold
//     document.querySelector('.header').style.top = '-310px'; // Hide the header
//   } else if (currentScroll < lastScrollTop || currentScroll <= scrollThreshold) {
//     // Scrolling up or within the threshold of the top
//     document.querySelector('.header').style.top = '0'; // Show the header
//   }

//   // Update lastScrollTop to the current scroll position, never going below 0
//   lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; 
// }, false);



// Showreel Images
document.addEventListener('DOMContentLoaded', function() {
  const images = document.querySelectorAll('.image-container img');
  const closeIcon = document.querySelector('.close-icon');

  images.forEach(img => {
      img.addEventListener('click', function() {
          images.forEach(inactiveImg => {
              if (inactiveImg !== img) {
                  inactiveImg.classList.add('hideimg');
              }
          });
          this.classList.add('fullimg');
          closeIcon.style.display = 'block';  // Show the close icon
      });
  });

  closeIcon.addEventListener('click', function() {
      images.forEach(img => {
          img.classList.remove('fullimg');
          img.classList.remove('hideimg');
      });
      this.style.display = 'none';  // Hide the close icon
  });
});


// Homepage Pods

document.addEventListener('DOMContentLoaded', function() {
    // Get all the divs by their IDs
    const pods = [document.getElementById('pod1'), document.getElementById('pod2'), document.getElementById('pod3')];

    // Function to deactivate all pods
    function deactivateOthers(exceptPod) {
        pods.forEach(pod => {
            if (pod !== exceptPod && pod.classList.contains('active')) {
                pod.classList.remove('active');
                pod.classList.add('unactive');
            }
        });
    }

    // Add click event listener to each pod
    pods.forEach(pod => {
        pod.addEventListener('click', function() {
            // Check if the clicked pod is already active
            const isActive = this.classList.contains('active');
            
            // First, deactivate other pods
            deactivateOthers(this);

            // Toggle the active state of the clicked pod
            if (isActive) {
                this.classList.remove('active');
                this.classList.add('unactive');
            } else {
                this.classList.add('active');
                this.classList.remove('unactive');
            }
        });
    });
});


// Parallax Effect

document.addEventListener('scroll', function() {
    var scrollPosition = window.pageYOffset;
    var parallaxImage = document.getElementById('parallax-image');
    parallaxImage.style.transform = 'translateY(' + scrollPosition * 0.5 + 'px)';
  });


// Hamburger icon

$('document').ready(function () {
    var trigger = $('#hamburger'),
        isClosed = false;

    trigger.click(function () {
      burgerTime();
    });

    function burgerTime() {
      if (isClosed == true) {
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
    }

  });

// For menu scrolling

document.addEventListener('DOMContentLoaded', function() {
  // Select all anchor links that include an ID reference (starts with '#')
  const links = document.querySelectorAll('a[href^="#"]');

  links.forEach(link => {
      link.addEventListener('click', function(event) {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Get the destination ID from the href attribute
          const targetId = this.getAttribute('href');
          const targetElement = document.querySelector(targetId);

          if (targetElement) {
              // Calculate position needed to center the element
              const elementRect = targetElement.getBoundingClientRect();
              const absoluteElementTop = elementRect.top + window.pageYOffset;
              const middle = absoluteElementTop - (window.innerHeight / 2) + (elementRect.height / 2);

              // Scroll to the element
              window.scrollTo({
                  top: middle,
                  behavior: 'smooth'
              });
          }
      });
  });
});



// Services

// Loop over each pair from 1 to 8
for (let i = 1; i <= 8; i++) {
    // Construct the class names dynamically
    let mainClass = 'servicemain' + i;
    let detailClass = 'serviced' + i;

    // Select the elements based on the current index
    let mainElement = document.querySelector(`.${mainClass}`);
    let detailElement = document.querySelector(`.${detailClass}`);

    // Check if both elements exist
    if (mainElement && detailElement) {

        // Function to reset all elements to their initial state
        function resetAll() {
            for (let j = 1; j <= 8; j++) {
                let otherMainElement = document.querySelector(`.servicemain${j}`);
                let otherDetailElement = document.querySelector(`.serviced${j}`);
                if (otherMainElement && otherDetailElement) {
                    otherMainElement.classList.remove('hidden');  // Show all main elements
                    otherDetailElement.classList.add('hidden');  // Hide all detail elements
                }
            }
        }

        // Add mouseenter event to the main element
        mainElement.addEventListener('mouseenter', function() {
            resetAll();  // Reset all other elements
            mainElement.classList.add('hidden');  // Hide the current main element
            detailElement.classList.remove('hidden');  // Show the current detail element
        });

        // Add mouseleave event to the detail element
        detailElement.addEventListener('mouseleave', function() {
            resetAll();  // Reset all elements to ensure consistency
        });
    }
}







// Dropdown 

document.addEventListener('DOMContentLoaded', () => {
  const menuItems = document.querySelectorAll('.menu-item-has-children');

  menuItems.forEach(menuItem => {
      menuItem.addEventListener('click', (event) => {
          event.stopPropagation();

          const subMenu = menuItem.querySelector('.sub-menu');
          if (subMenu) {
              subMenu.classList.toggle('active');
          }

          menuItems.forEach(item => {
              if (item !== menuItem) {
                  const otherSubMenu = item.querySelector('.sub-menu');
                  if (otherSubMenu) {
                      otherSubMenu.classList.remove('active');
                  }
              }
          });
      });
  });

  document.addEventListener('click', (event) => {
      menuItems.forEach(menuItem => {
          const subMenu = menuItem.querySelector('.sub-menu');
          if (subMenu) {
              subMenu.classList.remove('active');
          }
      });
  });

  document.querySelectorAll('.sub-menu').forEach(subMenu => {
      subMenu.addEventListener('click', (event) => {
          event.stopPropagation();
      });
  });
});


// Fade Up

document.addEventListener('DOMContentLoaded', function () {
    const fadeUpElements = document.querySelectorAll('.fadeup');
  
    function handleScroll() {
      fadeUpElements.forEach(element => {
        const rect = element.getBoundingClientRect();
        if (rect.top < window.innerHeight - 90 && rect.bottom > 90) {
          element.classList.add('visible');
        }
      });
    }
  
    // Run on scroll
    window.addEventListener('scroll', handleScroll);
  
    // Run on initial load
    handleScroll();
  });
  

