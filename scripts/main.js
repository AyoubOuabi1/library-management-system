let wrapper = document.getElementById("wrapper");
let toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
    wrapper.classList.toggle("toggled");
};