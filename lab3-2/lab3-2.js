function buttonPressed()
{
    let article =["The", "A", "One", "Some" , "Any"];
    let noun =["boy", "girl", "dog", "town" , "car"];
    let verb =["drove", "jumped", "ran", "walked" , "skipped"];
    let preposition =["to", "from", "over", "under" ,"on"];
    let story = document.getElementById("story");
    story.value ="";
    story.value +="Once apon a time...\n\n";
    for (let i=0;i<20;i++){
        story.value+=`${article[random(article)]} ${noun[random(noun)]} ${verb[random(verb)]} ${preposition[random(preposition)]}.\n`;
    }
    story.value +="\nTHE END";
}
function random(arr){
    return Math.floor(Math.random()*arr.length)
}
function start()
{
   var searchButton = document.getElementById( "input1" );
   searchButton.addEventListener( "click", buttonPressed, false );
} // end function start

window.addEventListener( "load", start, false );