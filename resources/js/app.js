import './bootstrap';


// AdminLTE
// AdminLte
// require("admin-lte");
import "admin-lte/dist/js/adminlte.min.js";

// require('admin-lte');

/*--------------------------------------addEventListener------------------------------------------*/
document.addEventListener('DOMContentLoaded', function () {

  // variables
  const navbar = document.getElementById('mainNavbar');
  const scrollThreshold = 50;

  // checkScroll
  function checkScroll() {
    if (window.scrollY > scrollThreshold) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }

  // call
  checkScroll();
  // On_scroll
  window.addEventListener('scroll', checkScroll);

  // Set_event_date
  const eventDate = new Date("2025-10-29T00:00:00").getTime(); // adjust to your event
  const daysEl = document.getElementById("days");
  const hoursEl = document.getElementById("hours");
  const minutesEl = document.getElementById("minutes");
  const secondsEl = document.getElementById("seconds");

  function updateCountdown() {
    const now = new Date().getTime();
    const distance = eventDate - now;

    if (distance < 0) {
      document.getElementById("countdown").innerHTML = "<h3>Event Started!</h3>";
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    daysEl.textContent = days.toString().padStart(2, "0");
    hoursEl.textContent = hours.toString().padStart(2, "0");
    minutesEl.textContent = minutes.toString().padStart(2, "0");
    secondsEl.textContent = seconds.toString().padStart(2, "0");
  }

  // Call
  updateCountdown();
  setInterval(updateCountdown, 1000);

});
/*--------------------------------------./addEventListener------------------------------------------*/
