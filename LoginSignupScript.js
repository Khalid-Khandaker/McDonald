//May something wrong sa nthchild bullshit

const loginButton = document.querySelector(".login-button");
const loginModal = document.querySelector(".login-modal-container");

const signupButton = document.querySelector(".sign-up-button");
const signupModal = document.querySelector(".signup-modal-container");

const closeSignupLoginModal = document.querySelectorAll(".close-icon-container img");

loginButton.addEventListener("click", function() {
    loginModal.style.visibility ="visible";

    closeSignupLoginModal[0].addEventListener("click", function() {
        loginModal.style.visibility ="hidden";
        closeSignupLoginModal[0].removeEventListener("click", this);
    })
})

signupButton.addEventListener("click", function() {
    signupModal.style.visibility ="visible";

    closeSignupLoginModal[1].addEventListener("click", function() {
        signupModal.style.visibility ="hidden";

        closeSignupLoginModal[1].removeEventListener("click", this);
    })
})

