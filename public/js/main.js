$(document).ready(function() {

  // jquery for toggle sub menu
  $('.sub-btn').click(function() {
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
  })

  // jquery for expand and collapse the sidebar
  $('.hamburger').click(function() {
    $('.side-bar').addClass('active');
    $('#container').css('left', '125px');
    $('.hamburger').css('display', 'none');
  });

  $('.close-btn').click(function() {
    $('.side-bar').removeClass('active');
    $('#container').css('left', '0px');
    $('.hamburger').css('display', 'block');
  })

  $(document).ready(function() {
    $('.intro').animsition({
      inClass: 'fade-in-down-sm',
      outDuration: 1000
    });
  });

  let lastScrollPos = 0;

  // window.onscroll = () => {stickyHeader()}
})

window.addEventListener('scroll', () => {
  document.querySelector('.hamburger-inner').classList.toggle('scrolled', window.scrollY > 800);
});

const form = document.getElementById('form');
const firstName = document.getElementById('first-name');
const lastName = document.getElementById('last-name');
const email = document.getElementById('email');
const subject = document.getElementById('subject');
const message = document.getElementById('message');

form.addEventListener('submit', e => {
  if (!validateInputs()) {
    e.preventDefault();
  };
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = message;
  element.classList.remove('success');
  inputControl.classList.add('error');
  inputControl.classList.remove('success')
}

const setSuccess = element => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = '';
  element.classList.add('success');
  inputControl.classList.remove('error');
};

const isValidEmail = email => {
  const re = new RegExp("^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$");
  return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
  const firstNameVal = firstName.value.trim();
  const lastNameVal = lastName.value.trim();
  const emailVal = email.value.trim();
  const subjectVal = subject.value.trim();
  const messageVal = message.value.trim();

  var passed = true;

  if (firstNameVal === '') {
    setError(firstName, 'First Name is missing');
    passed = false;
  } else {
    setSuccess(firstName);
  }

  if (lastNameVal === '') {
    setError(lastName, 'Last Name is missing');
    passed = false;
  } else {
    setSuccess(lastName)
  }

  if (emailVal === '') {
    setError(email, 'Email is missing');
    passed = false;
  } else if (!isValidEmail(emailVal)) {
    setError(email, 'Please provide a valid email address');
    passed = false;
  } else {
    setSuccess(email);
  }

  if (subjectVal === '') {
    setError(subject, 'Subject is missing');
    passed = false;
  } else {
    setSuccess(subject)
  }

  if (messageVal === '') {
    setError(message, 'Message is missing');
    passed = false;
  } else {
    setSuccess(message)
  }

  return passed;

}