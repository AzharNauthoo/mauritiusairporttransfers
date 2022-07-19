function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
}


$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items:1,
        loop:true,
        nav:true,
        dots:true,
        autoplay:true,
        autoplaySpeed:1000,
        smartSpeed:1500,
        autoplayHoverPause: true

    });


});

window.addEventListener('load', () => {
    const params = (new URL(document.location)).searchParams;
    const number = params.get('number of passengers');


    if (number>5) {
        document.getElementById("car").classList.add("remove");
        document.getElementById("suv").classList.add("remove");

    } 
    else if (number>=3 && number <6)
    {
        document.getElementById("car").classList.add("remove");
    }
    
    
    })


function returnCar() {
   var vehicle =  document.getElementById("car_car").value;
   document.getElementById('vehicle_type').value = vehicle;


}

function returnSuv() {
    var vehicle =  document.getElementById("suv_suv").value;
    document.getElementById('vehicle_type').value = vehicle;
 }

 function returnVan() {
    var vehicle =  document.getElementById("van_van").value;
    document.getElementById('vehicle_type').value = vehicle;
 }

