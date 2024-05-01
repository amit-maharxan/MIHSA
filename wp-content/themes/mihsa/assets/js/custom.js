// document.addEventListener("DOMContentLoaded", (e)=>{
//     const main = document.querySelector("main")
//     const header = document.querySelector("header");
//     main.style.paddingBlockStart= header.offsetHeight + "px";

// });
document.addEventListener("scroll", (e)=>{
   const header = document.querySelector("header");
//    console.log("scrollY", window.scrollY);
//    console.log("offsetHeight", header.offsetHeight);
   if(window.scrollY>=header.offsetHeight){
       header.toggleAttribute("data-sticky", true);
       
    } else{
        header.toggleAttribute("data-sticky", false);
    }
})
function hamburgerToggle(targetId){
    const target = document.querySelector(targetId);
    console.log(target);
    target.toggleAttribute("data-open")
}