let menubtn =document.querySelector('#menu_bars');
let mynav =document.querySelector('.navbar');

menubtn.onclick = () =>{
    menubtn.classList.toggle('fa-times');
    mynav.classList.toggle('active');
}

var ractive = new Ractive({
    el: '#container',
    template: '#template',
    data: {}
  });
  
