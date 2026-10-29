function toggleUserVisibility() {
    const user_options = document.getElementById("account-options");
    user_options.classList.toggle("visible");
}

function removeUserVisibility() {
    const user_options = document.getElementById("account-options");
    user_options.classList.remove("visible");
}