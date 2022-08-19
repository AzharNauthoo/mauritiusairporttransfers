
// javascript for navigation bar effect on scroll
// window.addEventListener("scroll",function(){
//   var header=document.querySelector("header");
//   header.classList.toggle('sticky',window.scrollY >0);
// });

const nav = document.querySelector("header");
let lastScrollY = window.scrollY;

window.addEventListener("scroll", () => {
  if (lastScrollY < window.scrollY) {
    nav.classList.add("sticky");
    nav.classList.remove("bck");

  } else if (window.scrollY >0) {
    nav.classList.remove("sticky");
    nav.classList.add("bck");

  } else {
    nav.classList.remove("bck");

  }

  lastScrollY = window.scrollY;
});

// javascript for responsive navigation sidebar menu
var menu=document.querySelector('.menu');
var menuBtn=document.querySelector('.menu-btn');
var closeBtn=document.querySelector('.close-btn');
menuBtn.addEventListener("click",() => {
 menu.classList.add('active');
});
closeBtn.addEventListener("click",()=>{
  menu.classList.remove('active');
});


 


window.addEventListener('load', () => {
  const params = (new URL(document.location)).searchParams;
  const number = params.get('number of passengers');
  const type = params.get('transferType');
  const location = params.get('dDestination');
  document.getElementById('_num-pass').value = number;
  document.getElementById('_tt-type').value = type;
  document.getElementById('_d-destination').value = location;

  document.getElementById('hotel1').innerHTML=type;
  document.getElementById('hotel-name1').innerHTML=location;
  document.getElementById('hotel2').innerHTML=type;
  document.getElementById('hotel-name2').innerHTML=location;
  document.getElementById('hotel3').innerHTML=type;
  document.getElementById('hotel-name3').innerHTML=location;


  // localStorage.setItem("TYPE",type);
  // localStorage.setItem("LOCATION",location);
  // localStorage.setItem("NUM",number);

  // console.log(LOCATION)
//  const number = parseInt(localStorage.getItem('NumPax'));



  if (number>5) {
      document.getElementById("car").classList.add("remove");
      document.getElementById("suv").classList.add("remove");

  } 
  else if (number>=3 && number <6)
  {
      document.getElementById("car").classList.add("remove");
  }


});







$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
      items:1,
      loop:true,
      nav:true,
      dots:false,
      autoplay:true,
      autoplaySpeed:2000,
       smartSpeed:1500,
      autoplayHoverPause: true

  });


});