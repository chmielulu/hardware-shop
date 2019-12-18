let button;

window.addEventListener('load', function(){
    if(this.scrollY > 784){
        button = document.getElementById("button");
        button.classList.add("unfixed");
    }
});

window.addEventListener('scroll', function(){
    if(this.scrollY > 784){
        button.classList.add("unfixed");
    }

    else{
        button.classList.remove("unfixed");
    }
});
