const mybagModal = document.querySelector(".mybag-modal-container");
const mybagOpenButton = document.querySelector(".sample-cart");
const mybagcloseButton = document.querySelector(".mybag-close-icon-container");

mybagOpenButton.addEventListener("click", function() {
    mybagModal.style.visibility ="visible";

    mybagcloseButton.addEventListener("click", function() {
        mybagcloseButton.removeEventListener("click", this);

        mybagModal.style.visibility ="hidden";
    })
})