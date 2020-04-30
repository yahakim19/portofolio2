console.log("Connected");

let formMenu = document.getElementById("input-form");
formMenu.style.display = "none";

function editForm() {
    if (formMenu.style.display === "none") {
        formMenu.style.display = "block";

    } else {
        formMenu.style.display = "none";
    }

    let name = document.getElementById("pName").innerHTML;
    let role = document.getElementById("pRole").innerHTML;
    let availability = document.getElementById("pAvail").innerHTML;
    let usia = document.getElementById("pAge").innerHTML;
    let location = document.getElementById("pLoc").innerHTML;
    let exp = document.getElementById("pExp").innerHTML;
    let email = document.getElementById("pEmail").innerHTML;

    document.getElementById("inpName").value = name;
    document.getElementById("inpRole").value = role;
    document.getElementById("inpAvail").value = availability;
    document.getElementById("inpAge").value = usia;
    document.getElementById("inpLoc").value = location;
    document.getElementById("inpExp").value = exp;
    document.getElementById("inpEmail").value = email;


}


function submitForm() {
    formMenu.style.display = "none";
    let name = document.getElementById('inpName').value;
    let role = document.getElementById("inpRole").value;
    let availability = document.getElementById("inpAvail").value;
    let usia = document.getElementById("inpAge").value;
    let location = document.getElementById("inpLoc").value;
    let exp = document.getElementById("inpExp").value;
    let email = document.getElementById("inpEmail").value;

    document.getElementById("pName").innerHTML = name;
    document.getElementById("pRole").innerHTML = role;
    document.getElementById("pAvail").innerHTML = availability;
    document.getElementById("pAge").innerHTML = usia;
    document.getElementById("pLoc").innerHTML = location;
    document.getElementById("pExp").innerHTML = exp;
    document.getElementById("pEmail").innerHTML = email;
}