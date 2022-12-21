const sidebar = document.getElementById('sidebarId')
const toggle = document.getElementById("sidetoggle")
const searchBtn = document.getElementById("sideSearch")
const modeText = document.getElementById("modeId")


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})