// Define initial and final years for dropdown 1
const initialYear1 = 2024;
const finalYear1 = 5000; // Adjust as needed

// Function to populate the first dropdown with years
function populateYearDropdown1() {
    const yearDropdown1 = document.getElementById('year1');
    
    // Clear existing options
    yearDropdown1.innerHTML = '';
    
    // Add options for years from initialYear1 to finalYear1
    for (let year = initialYear1; year <= finalYear1; year++) {
        const yearOption = document.createElement('option');
        yearOption.value = year;
        yearOption.textContent = year;
        yearDropdown1.appendChild(yearOption);
    }
}

// Function to handle changes in the first dropdown
function handleYearChange1() {
    const yearDropdown1 = document.getElementById('year1');
    const selectedYear = yearDropdown1.value;
    console.log('Selected Year from Dropdown 1:', selectedYear); // Do something with the selected year
}

// Define initial and final years for dropdown 2
const initialYear2 = 2025;
const finalYear2 = 5000; // Adjust as needed

// Function to populate the second dropdown with years
function populateYearDropdown2() {
    const yearDropdown2 = document.getElementById('year2');
    
    // Clear existing options
    yearDropdown2.innerHTML = '';
    
    // Add options for years from initialYear2 to finalYear2
    for (let year = initialYear2; year <= finalYear2; year++) {
        const yearOption = document.createElement('option');
        yearOption.value = year;
        yearOption.textContent = year;
        yearDropdown2.appendChild(yearOption);
    }
}

// Function to handle changes in the second dropdown
function handleYearChange2() {
    const yearDropdown2 = document.getElementById('year2');
    const selectedYear = yearDropdown2.value;
    console.log('Selected Year from Dropdown 2:', selectedYear); // Do something with the selected year
}

// Initialize both dropdowns with years when the page loads
window.onload = function() {
    populateYearDropdown1();
    populateYearDropdown2();
};