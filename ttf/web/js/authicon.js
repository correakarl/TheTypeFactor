const authCtrl = document.querySelectorAll('.auth-input-area');
const iconDoor = document.getElementById('authDoor');

authCtrl.forEach((auth, index) => {
    auth.addEventListener("focus", () => {
        console.log('FOCUS');
        iconDoor.classList.remove("fa-door-closed");
        iconDoor.classList.add("fa-door-open");   
    });

    auth.addEventListener("blur", () => {
        console.log('unfocus');
        iconDoor.classList.add("fa-door-closed");
        iconDoor.classList.remove("fa-door-open"); 
    });
})