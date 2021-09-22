const searchBar = document.querySelector(".users .search input");
let searchBtn = document.querySelector(".users .search button");
let usersList = document.querySelector(".users .users-list");
searchBtn.onclick = function () {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
}
searchBar.onkeyup = () => {
    let serachTerm = searchBar.value;

    if (serachTerm != "") {
        searchBar.classList.add("active");
    } else {
        searchBar.classList.remove("active");
    }
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/search.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + serachTerm);
}
setInterval(() => {
    //let's start Ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("GET", "php/users.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let data = xhr.response;
                if (!searchBar.classList.contains("active")) { //if active not contain in search bar
                    usersList.innerHTML = data;
                }
            }
        }
    }
    xhr.send();
}, 500); //this function will run frequently after 500ms