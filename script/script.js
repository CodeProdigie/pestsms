const header = document.querySelector("header");
const toggler = document.querySelector(".toggle i");


toggler.addEventListener("click",()=>{
    header.classList.toggle("active")
})