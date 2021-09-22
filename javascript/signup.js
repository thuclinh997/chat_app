const form = document.querySelector(".signup form");
const continueBtn = form.querySelector(".button");
const errorText = document.querySelector(".error-txt");
form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submiting
}
continueBtn.onclick = () => {
    //let's start Ajax
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let data = xhr.response;
                if (data == "success") {
                    location.href = 'users.php';
                    errorText.style.display = "none";
                } else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }
    //we have to send the form data throught ajax to php
    let formData = new FormData(form); //creating new formData Object
    xhr.send(formData); //sending the form data to php
}