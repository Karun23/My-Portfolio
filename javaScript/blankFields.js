const form = document.querySelector('form');
const title = document.getElementById('title');
const bloginfo = document.getElementById('bloginfo');
form.classList.remove('error');


form.addEventListener('submit', function(event) {
  if (title.value === '' || bloginfo.value === '') {
    event.preventDefault();
    form.classList.add('error');
    window.alert("Either one or more of the fields are blank!");
  } else {
    form.classList.remove('error');
    
  }
});
