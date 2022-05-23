<<<<<<< HEAD
// form validation sign up
let formAdd = document.getElementById("formAdd");
let error = document.querySelectorAll(".valid");
let validNam = false;
let validPhon = false;
let validEmai = false;

function validName(Name){
    let userNameReg = /^([A-Za-z]{2,8})$/;
    if(userNameReg.test(Name)){
        validNam = true;
        error[0].innerHTML = "";
        document.getElementById("name").classList.remove("border-danger");
    }
    else{
        validNam = false;
        error[0].innerHTML = "Name not valid";
        document.getElementById("name").classList.add("border-danger");
    }
}
function validPhone(Phone){
    let phoneReg = /(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}/;
    if(phoneReg.test(Phone)){
        validPhon = true;
        error[1].innerHTML = "";
        document.getElementById("phone").classList.remove("border-danger");
    }
    else{     
        error[1].innerHTML = "Phone not valid";
        document.getElementById("phone").classList.add("border-danger");
        validPhon = false;
    }
}
function validEmail(Email){
    let emailReg = /^(^[a-z][a-zA-Z0-9-_.]+@(gmail|outlook).(com|fr))$/;
    if(emailReg.test(Email)){
        error[2].innerHTML = "";
        validEmai = true;
        document.getElementById("email").classList.remove("border-danger");
    }
    else{
        error[2].innerHTML = "Email not valid";
        document.getElementById("email").classList.add("border-danger");
        validEmai = false;
    }
}
formAdd.addEventListener("input",function(){
    let Name = formAdd.Name.value;
    let Phone = formAdd.Phone.value;
    let Email = formAdd.Email.value;
    validName(Name);
    validPhone(Phone);
    validEmail(Email);
});
formAdd.addEventListener("submit",(e)=>{
    let Name = formAdd.Name.value;
    let Phone = formAdd.Phone.value;
    let Email = formAdd.Email.value;
    let Adresse = formAdd.Adresse.value;

    if(validNam == true && validPhon == true && validEmai == true && !(Adresse == "")){
    }
    else{
        e.preventDefault();
    }
})

console.log('fdf');
=======
let modUpSt = document.getElementById("#modelstudent");
let close = document.getElementById("#close");
let btn = document.getElementById("#btn");


btn.addEventListener('click',function(){
    
})


>>>>>>> main
