const navBar=document.querySelector("nav"),
menuBtns=document.querySelectorAll(".menu-icon"),
overlay=document.querySelector(".overlay");
// console.log(navbar,menuBtns,overlay);
menuBtns.forEach((menuBtn) =>{
    menuBtn.addEventListener("click",()=> {
        navBar.classList.toggle("open");
    });
});
overlay.addEventListener("click",()=>{
    navBar.classList.remove("open");
});