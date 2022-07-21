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
    const carOption = params.get('carCar');
    const carOption1 = params.get('suvSuv');
    const carOption2 = params.get('vanVan');

    
    if (carOption == "car"){
    document.getElementById('vehicle_type').value = carOption;
        
    }else if (carOption1 == "suv"){
        document.getElementById('vehicle_type').value = carOption1;

    } else if(carOption2 == "van") {
        document.getElementById('vehicle_type').value = carOption2;
 
    }else {
        console.log("error");
    }


    console.log(document.getElementById('vehicle_type').value);


    if (number>5) {
        document.getElementById("car").classList.add("remove");
        document.getElementById("suv").classList.add("remove");

    } 
    else if (number>=3 && number <6)
    {
        document.getElementById("car").classList.add("remove");
    }
})


