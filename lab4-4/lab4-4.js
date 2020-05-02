let img=document.getElementById("img");
function getXY(e){
    x=e.clientX-img.offsetLeft;
    y=e.clientY-img.offsetTop;
    img.addEventListener("mousemove",move,true)
}
function cancel(){
    img.removeEventListener("mousemove",move,true)
   
}
function move(e){
    img.style.position="absolute";
    let ex=e.pageX
    let ey=e.pageY
    img.style.left=ex-x+"px";
    img.style.top=ey-y+"px";
}
img.addEventListener("mousedown",getXY,false);
img.addEventListener("mouseup",cancel,false);
