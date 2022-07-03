// form popup
function redirect()
{
    window.location="http://localhost/myproject/karya/src/template/post/login.php";
    return formPopUp();
}

    
function formPopUp(){
    const popup = document.querySelector('.container-popup');
    popup.classList.add('active');
}
function closePopUp(){
    const popup = document.querySelector('.container-popup');
    popup.classList.remove('active');
    

}

// function formpopup(){
//     window.location="http://localhost/myproject/karyatesting/src/template/post/login.php";

//     const popup = document.querySelector('.container-popup');
//     const loginbtn =document.querySelector('#login-btn');
//     const closebtn =document.querySelector('.close-btn');
//     popup.classList.remove('active');
    
//     loginbtn.addEventListener('click',()=> {
//         popup.classList.add('active');
//     });
    
//     closebtn.addEventListener('click',()=>{
//         popup.classList.remove('active');
//     });
// }
