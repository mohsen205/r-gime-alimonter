/*navar fixed of not  */
let navbar =  document.getElementsByClassName('navbar')
let title  =  document.title;
if(title ==  "Login" || title == "Reset Password" || title ==  "Register" || title == "Home" || title == "Resulat" || title == "Exrcices" || title == "Histroy"){
    navbar[0].classList.add('bg-light');
    navbar[0].classList.remove('fixed-top');
}else{
    document.addEventListener('scroll',function(){
        if(scrollY >= 316){
            navbar[0].classList.add('bg-light');
        }else{
          navbar[0].classList.remove('bg-light');
        }
    })
}
