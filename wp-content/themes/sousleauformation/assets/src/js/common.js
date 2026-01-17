// Sticky header au scroll
document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('header');
  if (!header) return;

  window.addEventListener('scroll', function () {
    if (window.scrollY > 0) { // sticky dès qu'on scroll
      header.classList.add('sticky');
      document.body.classList.add('has-sticky-header');
    } else {
      header.classList.remove('sticky');
      document.body.classList.remove('has-sticky-header');
    }
  });
});
