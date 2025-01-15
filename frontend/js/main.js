// Menu Toggle
const nav = document.querySelector('.nav');
const toggle = document.querySelector('.nav-toggle');

if (toggle && nav) {
    toggle.addEventListener('click', () => {
        nav.classList.toggle('show-menu');
    });
}

// Remove Menu on Link Click
const navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        if (nav) nav.classList.remove('show-menu');
    });
});

// Change Active Link Color
navLinks.forEach(link => {
    link.addEventListener('click', function () {
        navLinks.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});

// Swiper Initialization
function initializeSwiper(selector, config) {
    if (document.querySelector(selector)) {
        new Swiper(selector, config);
    }
}

initializeSwiper(".home-slider", {
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: { delay: 2500, disableOnInteraction: false },
    pagination: { el: ".swiper-pagination", clickable: true },
});

initializeSwiper(".time-imgs", {
    loop: true,
    spaceBetween: 0,
    grabCursor: true,
    autoplay: { delay: 2500 },
    breakpoints: {
        0: { slidesPerView: 1 },
        640: { slidesPerView: 3 },
        768: { slidesPerView: 4 },
        1024: { slidesPerView: 5 },
    },
});

// Scroll Events (Debounced)
const debounce = (func, wait = 20) => {
    let timeout;
    return function (...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
    };
};

const header = document.querySelector('.header');
const up = document.querySelector('.up');

window.addEventListener('scroll', debounce(() => {
    if (header) {
        header.classList.toggle('header-shadow', window.scrollY >= 70);
    }
    if (up) {
        up.classList.toggle('show', window.scrollY >= 560);
    }
}));

if (up) {
    up.addEventListener('click', () => {
        window.scrollTo({ behavior: 'smooth', top: 0 });
    });
}

// FullCalendar Initialization
$(document).ready(function() {
  $('#calendar').fullCalendar({
      header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
      },
    events: function(start, end, timezone, callback) {
        fetch('/HighStreetGym_Web_Dev/backend/phpparser.php?t=' + new Date().getTime(), { cache: "no-store" }) 
            .then(response => response.json())
            .then(data => {
                
                $('#calendar').fullCalendar('removeEvents');
                callback(data);
            })
            .catch(error => {
                alert('There was an error while fetching events!');
                console.error('Error:', error);
            });
         },
    eventClick: function(info) {
          const className = info.event.title;
          const classDate = info.event.start.format('YYYY-MM-DD'); 
          const classTime = info.event.start.format('HH:mm'); 
          const trainer = info.event.trainer; 字
      
   
          window.location.href = `../backend/booking.php?class_name=${encodeURIComponent(className)}&class_date=${classDate}&class_time=${encodeURIComponent(classTime)}&trainer=${encodeURIComponent(trainer)}`
          },
    eventRender: function(event, element) {
          if (event.description) {
              element.html('<div class="fc-title">' + event.title + '</div>' +
              '<div class="fc-description">' + event.description + '</div>');
          }
          if (event.category === 'Fitness') {
              element.addClass('fitness-event');  
          } else if (event.category === 'Combat') {
              element.addClass('combat-event'); 
          } else if (event.category === 'Dance') {
              element.addClass('dance-event'); 
          }
      },
      editable: false,
      eventAfterRender: function(event, element) {
      }
  });
  
});
document.addEventListener('DOMContentLoaded', function() {
  const authButtons = document.getElementById('auth-buttons');
  const memberButton = document.getElementById('member-button');

  const isLoggedIn = sessionStorage.getItem('isLoggedIn') === 'true';

  if (isLoggedIn) {
      authButtons.style.display = 'none';
      memberButton.style.display = 'block';
  } else {
      authButtons.style.display = 'block';
      memberButton.style.display = 'none';
  }

  const loginForm = document.getElementById('login-form');
  if (loginForm) {
      loginForm.addEventListener('submit', function(event) {
          event.preventDefault();

          const username = document.getElementById('username').value;
          const password = document.getElementById('password').value;

          fetch('/backend/login.php', {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify({ username, password })
          })
          .then(response => response.json())
          .then(data => {
              if (data.success) {
                  sessionStorage.setItem('isLoggedIn', 'true');
                  sessionStorage.setItem('user_id', data.user_id);
                  window.location.href = 'member.html';
              } else {
                  alert('Login failed: ' + data.message);
              }
          });
      });
  } else {
      console.error('Form with ID "login-form" not found.');
  }

  const registerForm = document.getElementById('register-form');
  if (registerForm) {
      registerForm.addEventListener('submit', handleRegister);
  } else {
      console.error('Form with ID "register-form" not found.');
  }
});

function validateForm() {
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  if (username.length < 3) {
      alert("Username must be at least 3 characters long.");
      return false;
  }

  if (password.length < 6) {
      alert("Password must be at least 6 characters long.");
      return false;
  }

  return true; // 如果所有验证都通过，返回 true
}

function handleRegister(event) {
  event.preventDefault(); // 阻止表单默认提交行为

  // 调用 validateForm 进行客户端验证
  if (!validateForm()) {
      return; // 如果验证失败，停止执行
  }

  const form = event.target;
  const formData = new FormData(form);

  fetch(form.action, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(Object.fromEntries(formData))
  })
  .then(response => response.json())
  .then(data => {
      if (data.success) {
          alert("Registration successful!");
          window.location.href = 'login.php'; // 跳转到登录页面
      } else {
          alert("Registration failed: " + data.message); // 显示错误信息
      }
  })
  .catch(error => {
      console.error('Error:', error);
      alert('An error occurred. Please try again.');
  });
}