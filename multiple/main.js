// Todo: Create a function that loads the country, state, city, zip

const countryStateInfo = {
  USA: {
    California: {
      "Los Angeles": ["90001", "90002", "90003", "90004"],
      "San Diego": ["92093", "92101"],
    },
    Texas: {
      Dallas: ["75201", "75202"],
      Austin: ["73301", "73344"],
    },
  },
  Germany: {
    Bavaria: {
      Munich: ["80331", "80333", "80335", "80336"],
      Nuremberg: ["90402", "90403", "90404", "90405"],
    },
    
  },
};

window.onload = function () {
  //todo: Get all input html elements from the DOM

  const countrySelection = document.querySelector("#Country"),
    stateSelection = document.querySelector("#State"),
    citySelection = document.querySelector("#City"),
    zipSelection = document.querySelector("#Zip");


// todo: Disable all  Selection by setting disabled to false
  stateSelection.disabled = true; // remove all options bar first
  citySelection.disabled = true; // remove all options bar first
  
   
   stateSelection.length = 1;
   citySelection.length = 1; // remove all options bar first
   

for (let country in countryStateInfo) {
    countrySelection.options[countrySelection.options.length] = new Option(
      country,
      country
    );
  }

  //todo: country Changed
  countrySelection.onchange = (e) => {
    stateSelection.disabled = false;
    // todo: Clear all options from State Selection
    stateSelection.length = 1; // remove all options bar first
    citySelection.length = 1; // remove all options bar first
   

    // if (e.target.selectedIndex < 1) return; // done

    // todo: Load states by looping over countryStateInfo
    for (let state in countryStateInfo[e.target.value]) {
      stateSelection.options[stateSelection.options.length] = new Option(
        state,
        state
      );
    }
  };

  //todo: State Changed
  stateSelection.onchange = (e) => {
    citySelection.disabled = false;

    citySelection.length = 1; // remove all options bar first
 
    for (let city in countryStateInfo[countrySelection.value][e.target.value]) {
      citySelection.options[citySelection.options.length] = new Option(
        city,
        city
      );
    }
  };


   };

  