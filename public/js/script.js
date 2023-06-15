const btnAddClassPlan = document.querySelector("#btnAddClassPlan");
const btnCloseModal = document.querySelector("#buttonCancelAddClassPlan");

btnAddClassPlan.onclick = () => {
    document.querySelector(".div-modal-container").classList.remove("hidden");
}

btnCloseModal.onclick = () => {
    document.querySelector(".div-modal-container").classList.add("hidden");
}



