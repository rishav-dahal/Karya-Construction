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
