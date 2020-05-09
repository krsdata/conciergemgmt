var stickymenu = document.getElementById("headernavigation")
var sticky = stickymenu.offsetTop

window.addEventListener("scroll", function(e){
    requestAnimationFrame(function(){
        if (window.pageYOffset > sticky){
            stickymenu.classList.add('menufixed')
        }
        else{
            stickymenu.classList.remove('menufixed')
        }
    })
})
