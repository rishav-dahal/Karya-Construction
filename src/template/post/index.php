<?php 
include("../base/database.php");
include("../base/header.php");


?>
    <div class="container-carausol container-div">
            <h1>here goes carausol</h1>
    </div>

    <div class="container-our-work container-div">
        <h1>here goes our work</h1>
    </div>
       
    <div class="container-our-service container-div">
        <h1>here goes our services</h1>
        <div class="card">
            
        </div>
        <div class="card">

        </div>
        <div class="card">

        </div>
    </div>

    <div class="container-portfolio container-div">
        <h1>here goes portfolio</h1>
    </div>
<script>
    const parallex=document.getElementsByClassName("container-carausol");
    window.addEventListener("scroll",function()
    {
        let offset=window.pageXOffset;
        parallex.style.background=offset*0.7+"px";
    })
</script>
<?php

include("../base/footer.php");

?>