// Smooth scrolling for anchor links
const smoothScroll = (target) => {
    document.querySelector(target).scrollIntoView({
      behavior: 'smooth'
    });
  };
  
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      e.preventDefault();
      const target = anchor.getAttribute('href');
      smoothScroll(target);
    });
  });
  