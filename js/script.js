
function openCalculator() {
    document.getElementById("center").style.display = "block";
}

function closeCalculator() {
    document.getElementById("center").style.display = "none";
}

var result = document.getElementById("result");
function addnum(value) {
result.value += value;
}
function clearResult() {
result.value = "";

}
function calculateResult() {
result.value = eval(result.value);
}

const loginBtn = document.getElementById("loginBtn");
const loginModal = document.getElementById("loginModal");
const closeBtn = document.getElementById("closeBtn");

loginBtn.addEventListener("click", openModal);
closeBtn.addEventListener("click", closeModal);

function openModal() {
loginModal.style.display = "block";
}

function closeModal() {
loginModal.style.display = "none";
}