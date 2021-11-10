const h1 = document.querySelector(".title");

function eventMent() {
    h1.classList.toggle("clicked");
}

h1.addEventListener("click", eventMent);