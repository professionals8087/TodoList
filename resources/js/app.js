const btn = document.getElementById("btn");
const main = document.getElementById("main");
const text = document.getElementById("text");

function AddFilter() {
  main.classList.add("filter");
  
  btn.querySelector('i.fa-solid').classList.remove('fa-eye-slash');
  btn.querySelector('i.fa-solid').classList.add('fa-eye');
  text.innerText = "نمایش بده";
}

function RemoveFilter() {
  main.classList.remove("filter");
  
  btn.querySelector('i.fa-solid').classList.remove('fa-eye');
  btn.querySelector('i.fa-solid').classList.add('fa-eye-slash');
  text.innerText = "مخفی کن";
}

btn.addEventListener('click', () => {
  const isfilter = main.classList.contains('filter');

  if (isfilter) {
    RemoveFilter();
  } else {
    AddFilter();
  }
});
