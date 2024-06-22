let fileInput = document.getElementById("imageFileInput");
let uploadLabel = document.getElementById("title");

fileInput.onchange = function () {
  let file = new FileReader();
  file.readAsDataURL(fileInput.files[0]);
  file.onload = function () {
    img.src = file.result;
    img.onload = function () {
      img.width = img.width;
      img.height = img.height;
      uploadLabel.style.display = 'none';
      img.style.display = 'block';
    };
  };
};





// import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-app.js";
// import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-auth.js";
// import { GoogleAuthProvider, signInWithPopup } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-auth.js";

// const firebaseConfig = {
//     apiKey: "AIzaSyD5iRLRnjyklJ5QFj5ZwOtjP5XGetrCKgo",
//     authDomain: "wasal-feen.firebaseapp.com",
//     databaseURL: "https://wasal-feen-default-rtdb.firebaseio.com",
//     projectId: "wasal-feen",
//     storageBucket: "wasal-feen.appspot.com",
//     messagingSenderId: "41028489249",
//     appId: "1:41028489249:web:dc58a7030c374a35359360",
//     measurementId: "G-5W8K7XTEZ2"
// };
// const app = initializeApp(firebaseConfig);
// const auth = getAuth(app);

// // Password strength indicator
// let PasswordInp = document.getElementById("passwordInp");
// let PasswordStrength = document.getElementById("passwordStrength");

// PasswordInp.addEventListener('input', function () {
//     let result = zxcvbn(PasswordInp.value);
//     let score = result.score; // 0 to 4
//     let colorClass = '';
//     let strengthText = '';

//     switch (score) {
//         case 0:
//         case 1:
//             colorClass = 'text-danger';
//             strengthText = 'Weak';
//             break;
//         case 2:
//             colorClass = 'text-warning';
//             strengthText = 'Moderate';
//             break;
//         case 3:
//             colorClass = 'text-info';
//             strengthText = 'Good';
//             break;
//         case 4:
//             colorClass = 'text-success';
//             strengthText = 'Strong';
//             break;
//         default:
//             colorClass = 'text-muted';
//             strengthText = '';
//     }

//     PasswordStrength.innerHTML = `<small class="${colorClass}">${strengthText}</small>`;
// });

// // User registration
// let UsernameInp = document.getElementById("usernameInp");
// let EmailInp = document.getElementById("emailInp");
// let MainForm = document.getElementById("mainform");
// let notification = document.getElementById("notification");

// // Function to show notifications
// let showNotification = (message, isSuccess) => {
//     notification.innerText = message;
//     notification.style.backgroundColor = isSuccess ? '#28a745' : '#dc3545';
//     notification.style.display = 'block';
//     setTimeout(() => {
//         notification.style.display = 'none';
//     }, 2000);
// };

// // Register user function
// let RegisterUser = evt => {
//     evt.preventDefault();
//     createUserWithEmailAndPassword(auth, EmailInp.value,
//     PasswordInp.value)
//         .then(credentials => {
//             console.log(credentials);
//             showNotification('Registration successful!', true);
//             setTimeout(() => {
//                 window.location.href = "login.en.html";

//             }, 2000);
//         })
//         .catch(error => {
//             showNotification('Registration failed. Please try again.', false);
//             console.log(error.code);
//             console.log(error.message);
//         });
// };

// MainForm.addEventListener('submit', RegisterUser);

// // Google authentication setup
// const provider = new GoogleAuthProvider();
// const googleLogin = document.getElementById("google-btn-login");
// googleLogin.addEventListener("click", function () {
//     signInWithPopup(auth, provider)
//         .then((result) => {
//             const credential = GoogleAuthProvider.credentialFromResult(result);
//             const token = credential.accessToken;
//             const user = result.user;
//             console.log(user);
//             window.location.href = "login.en.html";
//         }).catch((error) => {
//             const errorCode = error.code;
//             const errorMessage = error.message;
//             const email = error.customData.email;
//             const credential = GoogleAuthProvider.credentialFromError(error);
//         });
// });