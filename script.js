let menuDown = false;


function menuToggle() {

    if (menuDown === false) {
        let arrowdown = document.querySelector(".collection")
        let arrowturn = document.querySelector(".arrow")
        arrowdown.classList.remove("dropuparrow")
        arrowturn.classList.remove("arrowflipback")
        arrowdown.classList.add("dropdownarrow")
        arrowturn.classList.add("arrowflip")
        menuDown = true;
    }

    else {
        let arrowdown = document.querySelector(".collection")
        let arrowturn = document.querySelector(".arrow")
        arrowdown.classList.remove("dropdownarrow")
        arrowturn.classList.remove("arrowflip")
        arrowdown.classList.add("dropuparrow")
        arrowturn.classList.add("arrowflipback")
        menuDown = false;
    }
}