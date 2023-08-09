<?php 
include("karya/src/template/base/header.php");


?>  <div class="container-carausol container-div">
        <div class="slide-container">
        

            <div class="slider">
                <img src="<?php echo $link;?>/karya/src/images/sliderPic1.jpg" alt="">
                <div class="text"><q cite="Winston Churchill">We shape our buildings- thereafter, they shape us.</q></div>
            </div>

            <div class="slider">
                <img src="<?php echo $link;?>/karya/src/images/sliderPic2.jpg" alt="">
                <div class="text" style="color: black;"><q cite="Jeremy Renner">Building is about getting around the obstacles that are presented to you.</q></div>
            </div>

            <div class="slider">
                <img src="<?php echo $link;?>/karya/src/images/sliderPic3.jpg" alt="">
                <div class="text"><q cite="David Allan Coe">It is not the beauty of the building you should look at: it’s the construction of the foundation that will stand the test of time.</q></div>
            </div>

            <div class="slider">
                <img src="<?php echo $link;?>/karya/src/images/sliderPic4.jpg" alt="">
                <div class="text" style="color: black;"><q cite="John Ruskin">When we build, let us think that we build forever.</q></div>
            </div>

            <div class="slider">
                <img src="<?php echo $link;?>/karya/src/images/sliderPic5.jpg" alt="">
                <div class="text"><q cite="Melanie A. Smith">I walk past a construction site and manage a fond smile as I watch the workers clean-up for the day.</q></div>
            </div>

            <span class="arrow prev" onclick="controller(-1)">&#10094;</span>
            <span class="arrow next" onclick="controller(1)">&#10095;</span>
        </div>
    </div>
    <div class="container-our-work container-div">
        <div class="heading">
            <p><span style="color:#C40D3B; text-decoration:underline;">What</span> we do<p>
        </div>
        <div class="text-card">
            <div class="wrapper-text">
                <p>The team at Karya understand these problems, so we are here to assist you with</p>
            </div>
        </div>
        <div class="grid">
            <div class="card2">
                <div class="cicon"><i class="fa-solid fa-4x fa-trowel"></i></div>
                <div class="card-text">Construction Material</div>
            </div>
            <div class="card2">
                <div class="cicon"><i class="fa-solid fa-4x fa-helmet-safety"></i></div>
                <div class="card-text">Human Resources</div>
            </div>
            <div class="card2">
                <div class="cicon"><i class="fa-solid fa-4x fa-headset"></i></div>
                <div class="card-text">Technical Support</div>
            </div>

        </div>
    </div>
       
    <div class="container-our-service container-div">
        <div class="parallex-wrapper">
            <div class="wrapper-text">
            <p>Here at Karya, you don't have to be stuck with the ones you have around you</p>
            </div>
        </div>
    </div>

    <div class="container-portfolio container-div">

    <div class="grid">
            <div class="card">
                <div class="cicon"><i class="fa-solid fa-4x fa-people-group"></i></div>
                <div class="card-text">
                <p>Over 300+ registered professionals</p>
                </div>
            </div>
            <div class="card">
                <div class="cicon"><i class="fa-solid fa-4x fa-location-dot"></i></div>
                <div class="card-text">
                <p>Professionals from all over the country</p>
                </div>
            </div>
            <div class="card">
                <div class="cicon"><i class="fa-solid fa-4x fa-money-bill-wave"></i></div>
                <div class="card-text">
                <p>Efficient work at the same cost</p> 
                </div>
            </div>
            <div class="card">
                <div class="cicon"><i class="fa-solid fa-4x fa-arrow-right-arrow-left"></i></div>
                <div class="card-text">
                <p>Easy P2P</p>
                </div>
            </div>
        </div>
    </div>
<?php

include("karya/src/template/base/footer.php");

?>