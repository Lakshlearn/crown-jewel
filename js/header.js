const menuButton = document.getElementById("menuToggle");
const closeMenuButton = document.getElementById("closeSidebar");
const mobileSidebar = document.getElementById("mobileSidebar");

const closeMobileSidebar = () => {
    mobileSidebar.classList.remove("active");
};

menuButton.addEventListener("click", () => {
    mobileSidebar.classList.add("active");
});

closeMenuButton.addEventListener("click", closeMobileSidebar);
