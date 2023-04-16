let up = document.getElementById("up");

window.onscroll = function(){
 if(scrollY >= 5 ){
  up.style.display = 'block';
  up.style.right = '0';   
}

};

up.addEventListener('click', function(){
    window.scroll (0,0);
    
});





