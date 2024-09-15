// Function to populate the first year dropdown
function populateYearDropdownPrimary() {
    const dropdownPrimary = document.getElementById('yearDropdownPrimary');
    const initialYearPrimary = 2024;
    const finalYearPrimary = 5000;

    // Clear existing options
    dropdownPrimary.innerHTML = '';

    for (let year = initialYearPrimary; year <= finalYearPrimary; year++) {
        const option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        dropdownPrimary.appendChild(option);
    }
}

// Function to handle year change for the first dropdown
function handleYearChangePrimary() {
    const dropdownPrimary = document.getElementById('yearDropdownPrimary');
    const selectedYearPrimary = dropdownPrimary.value;
    console.log('Selected Year from Primary Dropdown:', selectedYearPrimary); // Handle the selected year
}

// Initialize the first dropdown with years when the page loads
window.onload = function() {
    populateYearDropdownPrimary();
};
