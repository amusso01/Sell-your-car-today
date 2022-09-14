<?php
/**
 * 
 * Pre Footer
 * 
 * @author   Andrea Musso
 * 
 * @package  Foundry
 * 
 */

?>

<section class="fdry-pre-footer">
  <?php get_template_part( 'svg-template/svg', 'wave' ) ?>
  <div class="sw">
    <h3>GO ON, FIND OUT WHY MORE PEOPLE ARE SELLING THEIR CAR WITH US.</h3> 
    <h6>Enter your registration details now!</h6> 
    <form  onsubmit="return validateVRM(event)" class="np-form" id="regLookup"  action="/valuation-step-2" method="get">
      <input type="text" maxlength="8" placeholder="ENTER REG" class="form-reg"  id="regFooter" name="regFooter"> 
            <button type="submit" aria-label="Enter your reg above then click this to start your valuation" class="secondary btn">
          Pay Me More
      </button>
    </form>
  </div>
</section>



<script type="text/javascript">


    
function validateVRM(e) {

    
    var selection = document.getElementById("regFooter").value;
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