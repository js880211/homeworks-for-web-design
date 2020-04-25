function buttonPressed()
{
    
   // get the input text field
   var inputRow = document.getElementById( "row" ).value;
   var inputCol = document.getElementById( "column" ).value;
   // get the result paragraph
   var result = document.getElementById( "result" );
   var arr = [];
   var table = document.getElementById( "TB" );
   table.innerHTML =``;
   for(let i=0;i<inputRow;i++){
        arr.push([]);
       for(let j=0;j<inputCol;j++){
           arr[i].push([i+j]);
       }
   }
   
   for(let i=0;i<inputRow;i++){
    
    
        table.innerHTML +="<td>"+arr[i].join(" ")+"</td>";
    
    
}
}
function start()
{
   var searchButton = document.getElementById( "input1" );
   searchButton.addEventListener( "click", buttonPressed, false );
} // end function start

window.addEventListener( "load", start, false );