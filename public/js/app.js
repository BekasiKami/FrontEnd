const menuBarToggle = document.getElementById("menu-bar");
const optionMenu = document.querySelector(".option-menu");

menuBarToggle.addEventListener("click", () => {
  if (!optionMenu.classList.contains("active")) {
    optionMenu.classList.add("active");
  } else {
    optionMenu.classList.remove("active");
  }
});