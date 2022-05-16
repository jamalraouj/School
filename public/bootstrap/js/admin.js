// confirmation delete
let btnDelete = document.querySelectorAll(".btnDelete");
let btnConfirm = document.getElementById("btnConfirm");
let idAdmin = 0;
btnDelete.forEach(value => {
    value.addEventListener("click",()=>{
        idAdmin = value.children[0].innerHTML;
    })
});

btnConfirm.addEventListener("click",(e)=>{
    console.log(idAdmin);
    window.location.replace(`http://localhost/school/admincontroller/delete?id=${idAdmin}`);
})

const btnUpdate = document.querySelectorAll(".infoAdmin");
const formUpdate = document.getElementById("formUpdate");
btnUpdate.forEach(value => {
    value.addEventListener("click",()=>{
        dataAdmin = value.children[0].innerHTML.split(",");
        formUpdate.idAdmin.value = dataAdmin[0];
        formUpdate.full_name.value = dataAdmin[1];
        formUpdate.matricule.value = dataAdmin[2];
        formUpdate.role.value = dataAdmin[3];
        formUpdate.username.value = dataAdmin[4];
        formUpdate.password.value = dataAdmin[5];
    })
});



