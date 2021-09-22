const pswField = document.querySelector(".form .field input[type='password']");
let toggleBtn = document.querySelector(".form .field i");
toggleBtn.onclick = function(){
    if (pswField.type == "password") {
        pswField.type = "text";
        toggleBtn.classList.add("active");
    } else {
        pswField.type = "password";
        toggleBtn.classList.remove("active");

    }
}