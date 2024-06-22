let themeMode = localStorage.getItem('themeMode');
let email = localStorage.getItem('email');
let lang = localStorage.getItem('lang');
let role = localStorage.getItem('role');

const saveBtn = document.getElementById("Save");
const logoutBtn = document.getElementById("logout");

// Check if email is null and not on localhost, if yes, redirect to registration page
if (email === null && window.location.href !== "http://localhost/express/") {
    window.open("http://express2024.unaux.com/authentication", "_self");
}

// Set default language if not set
if (lang === null) {
    localStorage.setItem('lang', "en");
}

// Set default theme mode if not set
if (themeMode === null) {
    localStorage.setItem('themeMode', "light");
}

// Set default role if not set
if (role === null) {
    localStorage.setItem('role', "user");
}

// Function to set localStorage items to current values
function setStorage() {
    localStorage.setItem('themeMode', themeMode);
    localStorage.setItem('email', email);
    localStorage.setItem('lang', lang);
    localStorage.setItem('role', role);
}

// Function to clear localStorage
function clearStorage() {
    localStorage.removeItem('themeMode');
    localStorage.removeItem('email');
    localStorage.removeItem('lang');
    localStorage.removeItem('role');
}

function logout() {
    clearStorage();
    window.open("http://express2024.unaux.com", "_self");
}

saveBtn.addEventListener("click", setStorage);
logoutBtn.addEventListener("click", logout);
