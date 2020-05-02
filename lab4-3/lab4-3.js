function checkempty(){
    if(document.getElementById("text").value==""){
        var text=document.getElementById("p");
        text.innerHTML="DO NOT EMPTY"
    }
    else{
        var text=document.getElementById("p");
        text.innerHTML=""
    }
    
}