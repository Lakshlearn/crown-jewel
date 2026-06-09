function openWaterjetPopup() {
    document.getElementById("waterjetPopup").style.display = "flex";
}

function closeWaterjetPopup() {
    document.getElementById("waterjetPopup").style.display = "none";
}

window.onclick = function(event) {

    const popup = document.getElementById("waterjetPopup");

    if (event.target === popup) {
        closeWaterjetPopup();
    }
};