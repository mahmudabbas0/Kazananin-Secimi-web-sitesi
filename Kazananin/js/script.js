var countDownDate = new Date("2 12, 2024 10:43:00").getTime();
var x = setInterval(function() {
var cont =document.querySelector("#syac");    
var kaydet =document.querySelector("#kaydet");  
var now = new Date().getTime();
var distance = countDownDate - now;
const win = document.querySelector("#winner");
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
cont.innerHTML = days + " Gün " + hours + " Saat "
  + minutes + " Dakika " + seconds + " Saniye ";
  if (distance < 0) {
    win.disabled = false;
    clearInterval(x);
    cont.innerHTML = " Tarihi Geçmiş ";
    cont.style.color='red';
    kaydet.disabled = true;

  }
  else {
    kaydet.disabled = false;

  }
  
}, 1000);
