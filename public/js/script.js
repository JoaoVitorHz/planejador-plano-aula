const btnListAddClassPlan = document.querySelector("#btnListAddClassPlan");
const btnCloseModal = document.querySelector("#btnCancelAddClassPlan");
const btnAddClassPlan = document.querySelector("#btnAddClassPlan");


btnListAddClassPlan.onclick = () => {
    document.querySelector(".div-modal-container").classList.remove("hidden");
}

btnCloseModal.onclick = () => {
    document.querySelector(".div-modal-container").classList.add("hidden");
}


btnAddClassPlan.onclick = () => {
    alert("teste")
}


