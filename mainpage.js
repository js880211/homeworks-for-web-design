/*
let backgroundimg=["https://i.pximg.net/img-original/img/2019/11/16/19/09/10/77843885_p1.png",
"https://i.pximg.net/img-original/img/2019/06/15/19/17/13/75236174_p1.png",
"https://i.pximg.net/img-original/img/2019/04/14/00/00/10/74187222_p2.png"
];
let imgnum=backgroundimg.length;
let img=backgroundimg[Math.floor(Math.random()*imgnum)];
console.log(imgnum,img)

window.addEventListener("load",randomimg,false)
function randomimg(){
    let nav=document.getElementsByClassName("navbar-nav");
    let item=document.createElement("li");
    item.setAttribute("class","nav-item")
    let link=document.createElement("a");
    link.innerHTML="HI";
    link.setAttribute("class","nav-link");
    item.appendChild(link);
    nav[0].appendChild(item);
}*/

window.addEventListener("load",finish,false)
function finish(){
    document.getElementById("loading").setAttribute("style","display:none;")
    document.getElementsByClassName("container")[0].setAttribute("style","display:block")
    
}
$(document).ready(function(){
    $.get("animedata.php?g=1",function(data,status){
        var a = JSON.parse(data);
        $("#menu").append(typeof a);
        //$("#menu").append(typeof data+"<br>");
        $("#menu").append(a[0]);
    });
    $("#menu").append('<a class="dropdown-item" id="2010" href="#">2010</a>');
    $("#2010").click(function(){
        $.get("animedata.php?q=2010",function(data,status){{
        $(".container").append(data)
    }});
    });
    
});