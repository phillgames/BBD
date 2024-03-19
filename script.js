


function menuDown() {
    const rect = document.getElementById("navbar").getBoundingClientRect();
    if (rect.bottom == 55) {

        let arrowdown = document.querySelector(".collection")
        let arrowturn = document.querySelector(".arrow")
        arrowdown.classList.remove("dropuparrow")
        arrowturn.classList.remove("arrowflipback")
        arrowdown.classList.add("dropdownarrow")
        arrowturn.classList.add("arrowflip")
    }

}

function menuUp() {
    const rect = document.getElementById("navbar").getBoundingClientRect();
    if (rect.bottom == 145) {
        let arrowdown = document.querySelector(".collection")
        let arrowturn = document.querySelector(".arrow")
        arrowdown.classList.remove("dropdownarrow")
        arrowturn.classList.remove("arrowflip")
        arrowdown.classList.add("dropuparrow")
        arrowturn.classList.add("arrowflipback")
    }
}