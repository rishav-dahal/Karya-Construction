
const parallex=document.getElementById("parallex");
    window.addEventListener("scroll",function()
    {
        let offset=window.pageYOffset;
        parallex.style.backgroundPositionY = offset*0.5+"px";
    })