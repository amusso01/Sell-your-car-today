<?php
/**
 * HomePage Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/
?>
<section class="home-hero"><div class="sw hero-banner content-block"><div class="col-6 hero-container"><h1 class="h0 hero-header">
Sell Your Car Today
</h1> <h3 class="hero-text">
Congratulations! You’ve just found the best place to sell your car today.
See how much we'll pay for your car.
</h3> <form onsubmit="return validateVRM(event)" class="np-form container hero-button-container" id="regLookup"  action="/valuation-step-2" method="get" >
<input type="text" maxlength="8" placeholder="ENTER REG" id="reg" name="reg" class="form-reg"> 


<button aria-label="Enter your reg above then click this to start your valuation"  class="primary hero-button">
    Value my car
</button></form> <!----> <p class="hero-subtext">
It gets better – accept our valuation within 48 hours and we’ll pay even

<strong>more</strong>

again!

<strong>£100 more</strong>

in fact!
</p></div> <div class="col-6 hero-image" style="    background-size: contain; top:100px;    background-position: 100%;
background: linear-gradient(90deg, #fff 30.96%, rgba(255, 255, 255, 0) 54.28%), url(<?php echo get_template_directory_uri().'/dist/images/car-hero.png' ?>); background-repeat:no-repeat;"><img src="<?php echo get_template_directory_uri().'/dist/images/car-hero.png' ?>" alt="Banner image of car" class="hero-image-mobile"></div></div></section>


<script type="text/javascript">





    
function validateVRM(e) {

    
    var selection = document.getElementById("reg").value;
    var pattern = /^[0-9a-zA-Z ]{4,8}$/;

    if (selection.match(pattern)) {
        
        return true;
    } else {
        
        alert('Please enter a valid registration');
        e.preventDefault();

        return false;
    }

    fbq('trackCustom', 'Value My Car');
}

    </script>