window.addEventListener('load', () => {
    const newparams = (new URL(document.location)).searchParams;
    const carOption =  newparams.get('carCar');
    const carOption1 = newparams.get('suvSuv');
    const carOption2 = newparams.get('vanVan');
  
    
    if (carOption == "Standard Car"){
    document.getElementById('selected-vehicle').value = "Voiture Standard";
     document.getElementById('discounted-price').value = 33.99;
  
        
    }else if (carOption1 == "SUV/ Crossover"){
        document.getElementById('selected-vehicle').value = "Voiture familiale";
    document.getElementById('discounted-price').value = 46.99;
  
  
    } else if(carOption2 == "10 Seater Van") {
        document.getElementById('selected-vehicle').value = "Minibus";
     document.getElementById('discounted-price').value = 51.99;
        
  
    }else {
        console.log("error");
    }
  
  
    const nopax = newparams.get('num-pass');
    const typeTransfer = newparams.get('tt-type');
    const loca= newparams.get('d-destination');

    
  
    document.getElementById('destination').value = loca;
    document.getElementById('transfer-type').value = typeTransfer;
    document.getElementById('num-passengers').value = nopax;
  
  
  });