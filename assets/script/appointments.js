// Get references to the HTML elements
let bustype = document.getElementById('type');
let choosedBus = document.getElementById('bustype');
let buspic = document.getElementById('buspic');

let container = document.getElementById('container');
let typeContainer = document.getElementById('type'); // Renamed to avoid conflict with 'type' select element

// Initially hide the container
container.style.display = "none";

// Directory path for bus images
const dir = "../../assets/image/";

// Event listener for the "Done" button click
choosedBus.addEventListener("click", () => {
    // Get the selected bus type
    let selectedType = bustype.querySelector('select').value;

    // Check if a valid bus type is selected
    if (selectedType) {
        // Update the bus image source
        buspic.src = dir + selectedType;

        // Show the container with the bus ticket form
        container.style.display = 'block';

        // Hide the bus type selection
        typeContainer.style.display = 'none';
    } else {
        // Handle the case when no valid bus type is selected
        alert("Please select a valid bus type.");
    }
});
