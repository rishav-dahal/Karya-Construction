let flag = 3;

slideshow(flag);

function controller(n)
{
    flag += n;

    slideshow(flag);
}

function slideshow(num)
{
    let slides = document.getElementsByClassName('slider');

    if(num == slides.length)
    {
        flag =0;
        num =0;
    }

    if(num < 0)
    {
        flag = slides.length-1;
        num = slides.length-1;
    }

    for(let i of slides)
    {
        i.style.display = "none";
    }

    slides[num].style.display = "block";
}

const parallex=document.getElementById("parallex");
    window.addEventListener("scroll",function()
    {
        let offset=window.pageYOffset;
        parallex.style.backgroundPositionY = offset*0.5+"px";
    })

    // function validateform()
    // { 
       
    //     var name_pattern=/^[a-zA-Z]{2,30}$/;
    //     var email_pattern=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    //     var contact_pattern=/^[0-9]{10}$/;
    //     var pass_pattern=/^\w+{5,15}$/;
    //     var address_pattern=/^w+{2,30}$/;

    //     var name=document.getElementById("name").value;
    //     var email=document.getElementById("email").value;
    //     var username=document.getElementById("username").value;
    //     var address=document.getElementById("address").value;

    //     var contact=document.getElementById("contact").value;
    //     var pass=document.getElementById("pass").value;
    //     var cpass=document.getElementById("cpass").value;

    //     if(name.search(name_pattern)<0)
    //     {
    //         alert('Name pattern doesnt match');
    //         return false;
    //     }
    //     if(username.search(name_pattern)<0)
    //     {
    //         alert('username pattern doesnt match');
    //         return false;
    //     }
    //     if(email.search(email_pattern)<0)
    //     {
    //         alert('Email pattern doesnt match');
    //         return false;
    //     }
    //     if(contact.search(contact_pattern)<0)
    //     {
    //         alert('Contact pattern doesnt match');
    //         return false;
    //     }
    //     if(pass.search(pass_pattern)<0)
    //     {
    //         alert('Password pattern doesnt match');
    //         return false;
    //     }
    //     if(cpass.value!=pass.value)
    //     {
    //         alert(" password doesnt match");
    //         return false;
    //     }
    //     if(address.search(address_pattern)<0)
    //     {
    //         alert('Age pattern doesnt match');
    //         return false;
    //     }
    // }