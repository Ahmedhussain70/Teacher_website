
// form validation**************************************************
let RegEmail= /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
let Regphone=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
let RegName=/^[a-zA-Z ]+$/;
let RegAge=/^(0?[1-9]|[1-9][0-9]|[1][1-9][1-9]|200)$/;
let RegPassword= /^(?=.*\d)(?=.*[a-z])[0-9a-zA-Z]{8,}$/;


function emailValidation(){
    if(RegEmail.test(document.getElementById('mail').value) == true){
        return true;

    }
    else{
        return false;

    }


}


function phoneValidation(){
    if(RegName.test(document.getElementById('name').value) == true){
        return true;

    }
    else{
        return false;

    }

}
function nameValidation(){
    if(Regphone.test(document.getElementById('phone').value) == true){
        return true;

    }
    else{
        return false;

    }

}
function ageValidation(){
    if(RegPassword.test(document.getElementById('password').value) == true){
        return true;

    }
    else{
        return false;

    }

}
function passwordValidation(){
    if(RegPassword.test(document.getElementById('password').value) == true){
        return true;

    }
    else{
        return false;

    }

}
function rePasswordValidation(){
    if (document.getElementById('password').value == document.getElementById('rePassowrd').value) {
        return true;
        
    }
    else{
        return false;
    }

}


function checkValidation(){
    if (emailValidation()== true) {
        document.getElementById("emailAlert").classList.replace("d-block", "d-none")

    } else {
        document.getElementById("emailAlert").classList.replace("d-none", "d-block")

    }
    if (phoneValidation()== true) {
        document.getElementById("phoneAlert").classList.replace("d-block", "d-none")

    } else {
        document.getElementById("phoneAlert").classList.replace("d-none", "d-block")

    }
    if (nameValidation()== true) {
        document.getElementById("nameAlert").classList.replace("d-block", "d-none")

    } else {
        document.getElementById("nameAlert").classList.replace("d-none", "d-block")

    }
    if (ageValidation()== true) {
        document.getElementById("ageAlert").classList.replace("d-block", "d-none")

    } else {
        document.getElementById("ageAlert").classList.replace("d-none", "d-block")

    }
    if (passwordValidation()== true) {
        document.getElementById("passwordAlert").classList.replace("d-block", "d-none")

    } else {
        document.getElementById("passwordAlert").classList.replace("d-none", "d-block")

    }

   



    if ((rePasswordValidation())== true) {
        document.getElementById("repasswordAlert").classList.replace("d-block", "d-none")

    } else {
        document.getElementById("repasswordAlert").classList.replace("d-none", "d-block")

    }

   
 

}