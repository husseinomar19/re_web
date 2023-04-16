let inlog =document.getElementById("admin");
let checkinput = document.getElementById("userinput");
let checkinputpas = document.getElementById("userpas");

inlog.addEventListener('click', function(event){
    if(checkinput.value.length > 0){
        event.currentTarget.submit();
    }
    else
    {
        checkinput.style.borderColor ="red";
        event.preventDefault();
       
    }
    if(checkinputpas.value.length > 0){
        event.currentTarget.submit();
    }
    else
    {
        checkinputpas.style.borderColor ="red";
        event.preventDefault();
    }
    
    //event.currentTarget.submit(); 
    

    
    
    
});
