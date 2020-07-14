let dateInput = document.getElementById("date-input");
let days = document.getElementsByClassName("day");
let form = document.getElementsByTagName("form")[0];


document.addEventListener("DOMContentLoaded", function() {
  alert('sample');
  console.log("sample");
});

[].slice.call(days).forEach(day => {
  day.addEventListener("click", function() {
    dateInput.value = day.innerText;
    form.action = "/submit/" + day.innerText;
  });
});

document.addEventListener("DOMContentLoaded", function() {
  
});
