const icon = document.querySelector('#toggle-pwd');

icon.addEventListener("click", (event) => {
    let pwd = document.querySelector("#pwd");
    if (pwd.type === "password") {
        pwd.type = "text";
    } else {
        pwd.type = "password";
    }

    icon.classList.toggle("fa-eye-slash");
});