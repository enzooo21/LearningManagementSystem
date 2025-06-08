const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener('click', () => {
    container.classList.add('active');
});

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
});




// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
list.forEach((item) => {
    item.classList.remove("hovered");
});
this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
navigation.classList.toggle("active");
main.classList.toggle("active");
};




// Toggle login password
const loginPw = document.getElementById("loginPassword");
const toggleLoginPw = document.getElementById("toggleLoginPassword");

if (toggleLoginPw) {
    toggleLoginPw.addEventListener("click", () => {
        const type = loginPw.getAttribute("type") === "password" ? "text" : "password";
        loginPw.setAttribute("type", type);
        toggleLoginPw.classList.toggle("bx-show");
        toggleLoginPw.classList.toggle("bx-hide");
    });
}

// Toggle register password
const registerPw = document.getElementById("registerPassword");
const toggleRegisterPw = document.getElementById("toggleRegisterPassword");

if (toggleRegisterPw) {
    toggleRegisterPw.addEventListener("click", () => {
        const type = registerPw.getAttribute("type") === "password" ? "text" : "password";
        registerPw.setAttribute("type", type);
        toggleRegisterPw.classList.toggle("bx-show");
        toggleRegisterPw.classList.toggle("bx-hide");
    });
}
