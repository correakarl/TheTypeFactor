const tab1 = document.getElementById('form1');
const tab2 = document.getElementById('form2');
const tablog = document.getElementById('tabLog');
const tabreg = document.getElementById('tabReg');
const cont1 = document.getElementById('cont1');
const cont2 = document.getElementById('cont2');

const authCtrl = document.querySelectorAll('.auth-control');

tab1.addEventListener("click", () =>{
    cont1.classList.remove("active");
    cont2.classList.add("active");
    tablog.classList.remove("show");
    tabreg.classList.add("show");
});

tab2.addEventListener("click", () =>{
    cont1.classList.add("active");
    cont2.classList.remove("active");
    tablog.classList.add("show");
    tabreg.classList.remove("show");
});

authCtrl.forEach((auth, index) => {
    auth.addEventListener("focus", () => {
        
    })
})