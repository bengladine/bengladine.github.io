document.addEventListener("DOMContentLoaded", function () {
  const fadeInSections = document.querySelectorAll('.hidden');
  const navbar = document.querySelector('#navBar');
  const mobileNavbar = document.querySelector('#mobileNavBar'); // Select the navbar
  // Select the navbar
  const skillsSection = document.querySelector('#skills'); // Select the projects section

  if (skillsSection === null) {
    navbar.classList.add('visible'); // Make navbar visible when projects section is in view
    mobileNavbar.classList.add('visible');
  }

  const appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        if (entry.target === skillsSection) {
          navbar.classList.add('visible'); // Make navbar visible when projects section is in view
          mobileNavbar.classList.add('visible');
        }
      }
    });
  }, { threshold: 0.1 });

  fadeInSections.forEach(section => {
    appearOnScroll.observe(section);
  });

  // Observe the projects section separately
  appearOnScroll.observe(skillsSection);
});