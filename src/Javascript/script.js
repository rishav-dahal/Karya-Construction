let flag = 0;

slideshow(flag);

function controller(n)
{
    flag += 1;

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