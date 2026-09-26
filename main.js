let bars = document.querySelector(".bars")
let responSiveNAv = document.querySelector(".responsive-nav")
let closeCookies = document.querySelector(".cookiess")
let closeBtn = document.querySelector(".clss")

let showNav = false;

bars.addEventListener("click", ()=>{
    if(!showNav){
        responSiveNAv.style.left = 0+"px"
        showNav = !showNav
    }else{
        responSiveNAv.style.left = -10000+"px"
        showNav = !showNav
    }
})


let hideSign = document.querySelector("#clss")
let LoginForm = document.querySelector("#log-form")

hideSign.addEventListener("click", ()=>{
    LoginForm.style.display = "none";
    
})



closeBtn.addEventListener("click", ()=>{
    
        closeCookies.style.display = "none"
})

