function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
  }
  
function displayModal(){
    const modal_container = document.body.querySelector(".modal-container")
    modal_container.style.visibility = "visible"
}

function closeModal(){
        location_input_suggestions.style.visibility = "hidden"
}

function scrollToElement(str){
    const target = document.body.querySelector(str)
    target.scrollIntoView({behavior: "smooth"})
}

var location_input_suggestions = document.body.querySelector(".location-input-suggestions");
var location_input = document.getElementById("location-input");

const locate_icon = document.querySelector(".location-input-container button");

var valid_locations = ["malabon city", "quezon city", "manila city", "pasay city", "antipolo city", "caloocan city"];
var location_names = ["Fishermall", "SM", "Ayala", "Isetann", "LRT", "University"];
var location_distances = [
    "0.8 km (10.5 mins)",
    "1.2 km (15.0 mins)",
    "1.7 km (20.0 mins)",
    "2.5 km (30.0 mins)",
    "3.4 km (25.0 mins)",
    "4.1 km (35.5 mins)"
];
var location_addresses = [
    "125 Mabini St, Brgy San Isidro,",
    "456 Bonifacio Avenue, Brgy Sta Cruz,",
    "789 Rizal Rd, Brgy Bahay Katay,",
    "1010 Andres Bonificio St, Brgy Mag-Ampon,",
    "G Del Pilar St, Brgy San Isidro,",
    "Pilay Avenue, Brgy Tibay,"
];

location_input.addEventListener("keypress", (event) => {
    if(event.key == "Enter"){
        var input_arr = location_input.value.split(' ')
        var location = (input_arr[input_arr.length - 2] + " " + input_arr[input_arr.length - 1])
        console.log((input_arr[input_arr.length - 2] + input_arr[input_arr.length - 1]).toLowerCase())

        if(valid_locations.includes(location.toLowerCase())){
            location_input_suggestions.innerHTML = 
            `
                <div class="location-suggestion-header">
                    Select Store
                    <div class="location-suggestion-close" onclick="closeModal()">
                        <img src="Images/Icons/close-icon.svg" alt="Close Suggestions">
                    </div>
                </div>
            `
            shuffleArray(location_names)
            shuffleArray(location_addresses)

            for(let i = 0; i < 6; i++){
                location = location.split(' ')
                location = location[0]

                location_input_suggestions.innerHTML += 
                `
                <div class="location-suggestion">
                    <span class="location-name">${location_names[i] + " " + location}</span>
                    <span class="location-address">${location_addresses[i] + " " + location + " City"}</span>
                    <span class="location-distance">${location_distances[i]}</span>
                </div>
                `
            }
        } else{
            location_input_suggestions.innerHTML = 
            `
                <div class="location-suggestion-header" style ="border-bottom: 1px solid #cccccc">
                    Not available
                    <div class="location-suggestion-close" onclick="closeModal()">
                        <img src="Images/Icons/close-icon.svg" alt="Close Suggestions">
                    </div>
                </div>
                <div class ="location-input-error">
                    <strong style ="color: #b00021;">Sorry, we currently only serve in the following areas:</strong><br><br>
                    "Antipolo City",
                    "Caloocan City",
                    "Malabon City",
                    "Manila City",
                    "Pasay City",
                    "Quezon City"
                </div>
            `
        }
        location_input_suggestions.style.visibility = "visible"
    }
})

locate_icon.addEventListener("click", function() {
    location_input.value ="";
    location_input_suggestions.style.visibility = "hidden"
})