
ready()

function ready() {
    var items=document.getElementsByClassName("button1");
    var items2=document.getElementsByClassName("button2");
    var items3=document.getElementsByClassName("button3");
    var items4=document.getElementsByClassName("button4");
    var items5=document.getElementsByClassName("button5");

    var total=0;

    for(var i=0;i<items.length;i++){
        items[i].addEventListener("click", function() {
        total+=200;
  document.getElementById("totalprice").innerHTML =total+' calories';
});
    }
    
    for(var i=0;i<items2.length;i++){
        items2[i].addEventListener("click", function() {
        total+=400;
  document.getElementById("totalprice").innerHTML =total+' calories';
});
    }
    
    for(var i=0;i<items3.length;i++){
        items3[i].addEventListener("click", function() {
        total+=300;
  document.getElementById("totalprice").innerHTML =total+' calories';
});
    }
    
    for(var i=0;i<items4.length;i++){
        items4[i].addEventListener("click", function() {
        total+=600;
  document.getElementById("totalprice").innerHTML =total+' calories';
});
    }
    
    for(var i=0;i<items5.length;i++){
        items5[i].addEventListener("click", function() {
        total+=800;
  document.getElementById("totalprice").innerHTML =total+' calories';
});
    }
    
    
    

}
