const main_menu = document.querySelector('.main');
const open_menu = document.querySelector('.openBurger');
const close_menu = document.querySelector('.closeBurger');

open_menu.addEventListener('click', show);
close_menu.addEventListener('click', close);

function show(){
  main_menu.style.display = 'flex';
  main_menu.style.top = '-20';
}

function close(){
  main_menu.style.top = '-200%';
}
