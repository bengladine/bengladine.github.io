document.addEventListener("DOMContentLoaded", function() {
    const fadeInSections = document.querySelectorAll('.hidden');
  
    const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
       // } else {
         // entry.target.classList.remove('visible');
        }
      });
    }, { threshold: 0.1 });
  
    fadeInSections.forEach(section => {
      appearOnScroll.observe(section);
    });
  });