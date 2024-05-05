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
    target.toggleAttribute("data-open");
}
document.addEventListener("DOMContentLoaded", (e)=>{
    const modal = document.getElementById("menuDrawer");

    // Get the button that opens the modal
    // var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    // var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    // btn.onclick = function() {
    //   modal.style.display = "block";
    // }
    
    // When the user clicks on <span> (x), close the modal
    // span.onclick = function() {
    //   modal.style.display = "none";
    // }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.toggleAttribute("data-open");
      }
    }

});