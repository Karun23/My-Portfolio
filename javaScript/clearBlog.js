


const clearBtn = document.querySelector('button[type="reset"]');
clearBtn.addEventListener('click', function (event) {
  event.preventDefault();
  const userAns = confirm('Are you sure you want to clear the form?');

  
  if (userAns) {  
    
    document.querySelector('form').reset();
  }
});




