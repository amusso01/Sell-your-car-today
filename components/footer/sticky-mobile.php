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

<section class="fdry-sticky-footer">
  <form onsubmit="return validateVRM(event)" class="np-form " id="regLookup"  action="/valuation-step-2" method="get" >
    <input type="text" maxlength="8" placeholder="ENTER REG" id="regSticky" name="reg" class="form-reg"> 


    <button aria-label="Enter your reg above then click this to start your valuation"  class="primary hero-button">
        VALUE MY CAR
    </button>
  </form>
</section>



<script type="text/javascript">


    
function validateVRM(e) {

    
    var selection = document.getElementById("regSticky").value;
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