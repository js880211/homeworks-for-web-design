
let clickNum=0
window.addEventListener("load",start,false)
function start(){
    let btn= document.createElement("button")
    btn.setAttribute("id",1)
    document.body.appendChild(btn)
    document.getElementById("1").innerHTML=clickNum
    document.getElementById("1").addEventListener("click",plus,false)
}
function plus(){
    clickNum++
    document.getElementById("1").innerHTML=clickNum
}