var x = Math.floor(Math.random() * 5);
$(document).ready(function(){
        $("td").click(function(){
if(x==this){
    alert("congratulations you win.");
}
    
});
});


