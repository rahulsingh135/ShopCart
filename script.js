const bar = document.getElementById("bar");
const nav = document.getElementById("navbar");


bar.addEventListener("click", function () {
    nav.classList.toggle("active");
})
const cart = document.getElementById("cart");
const cartContainer = document.getElementById("cart-container");


cart.addEventListener("click", function () {
    cartContainer.classList.toggle("show");
})

const account = document.getElementById("acc");
const userContainer = document.getElementById("user-container");


account.addEventListener("click", function () {
    userContainer.classList.toggle("show1");
})



