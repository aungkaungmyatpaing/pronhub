function showhide(){
    var x=document.getElementById("show_hide");
    if(x.style.display==="none"){
        x.style.display="block";
    }else{
        x.style.display="none";
    }
}
function downArrow(){
    var da=document.getElementById("mini_dropdown");
    if(da.style.display==="none"){
        da.style.display="block";
    }else{
        da.style.display="none";
    }
}
function downArrow2(){
    var da=document.getElementById("mini_dropdown2");
    if(da.style.display==="none"){
        da.style.display="block";
    }else{
        da.style.display="none";
    }
}
function downArrow3(){
    var da=document.getElementById("mini_dropdown3");
    if(da.style.display==="none"){
        da.style.display="block";
    }else{
        da.style.display="none";
    }
}

// slideShow ===========================
var slideIndex=0;
showSlide();
function showSlide(){
    var i;
    var slides=document.getElementsByClassName("ads_container");
    for(i=0;i<slides.length;i++){
        slides[i].style.display="none";
    }
    slideIndex++;
    if(slideIndex>slides.length){
        slideIndex=1
    }
    slides[slideIndex-1].style.display="block";
    setTimeout(showSlide,2000);
}

function showhide(){
    var x=document.getElementById("remove");
    if(x.style.display==="block"){
        x.style.display="none";
    }else{
        x.style.display="block";
    }
}