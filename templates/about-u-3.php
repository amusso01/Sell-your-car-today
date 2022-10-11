<?php
/**
* Template Name: About you step 3
*
* @package WordPress
*/


get_header();



?>

<style>
  .step-link{
    font-size: 16px;
    color: #00b5da;
  }
  .step-link:hover{
    text-decoration: underline;
  }
</style>

<main role="main" class="site-main about-3-main">

<section class="valuation-steps">
  <div class="sw content-block--small">
    <div>
      <span out-in="">
        <div class="about-form">
          <a class="valuation-back">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-chevron-left"><path d="M14 6.99988L9.7071 11.2928C9.31658 11.6833 9.31658 12.3165 9.70711 12.707L14 16.9999" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> Back
          </a> 
          <h3 class="title">
              About You

            <span class="steps">Step <strong>2</strong> of 3</span>
          </h3> 
          <form  onsubmit="return validateAbout(event)"  action="<?php echo site_url('summary-valuation') ?>" name="valuation" id="valuation" method="POST">

          <div class="np-form step-1">
            <div class="form-items">
              <div class="col-6 form-container form-item container">
                <label for="first_name">Full Name
                      <sup>*</sup>
                </label> 
                <input id="first_name"  name="full_name"  placeholder="Enter full name" type="text" required="required" class=""> <span class="form-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
              </div> 
              <div class="col-6 form-container form-item container">
                <label for="email">Email
                      <sup>*</sup></label> 
                  <input id="email" name="email" placeholder="Enter email address" type="email" required="required" class=""> <span class="form-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
              </div> 
              <div class="col-6 form-container form-item container">
                <label for="phone">
                      Contact Number
                      <sup>*</sup></label> 
                <input id="phone" name="phone" maxlength="12" placeholder="Enter a contact number" type="number" required="required" class="invalid"> <span class="form-check invalid-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
              </div> 
              <div class="col-6 form-container form-item container">
                <label for="postcode">Post Code
                      <sup>*</sup></label> 
                      <input id="postcode" name="postcode" maxlength="8" placeholder="Enter your postcode" type="text" required="required" class=""> <span class="form-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
              </div>
            </div>
          </div> 

          <div class="marketing-preferences">
            <p>
            <label for="terms">
              <input id="terms" type="checkbox" value="accepted" required="required">
                When you obtain a valuation, you agree to the sellyourcartoday.com

                <a href="/car-purchase-terms-conditions/" class="step-link" target="_blank" title="View our Terms and Conditions" rel="noopener noreferrer">
                    terms and conditions.
                </a></label>
            </p>  
            <button type="submit" id="next" class="col-12 primary wide">
              Submit
            </button>
          </div>
                      </form>
        </div>
      </span>
    </div>
  </div>
</section>

</main><!-- #main -->




<script type="text/javascript">


function disableButton() {
        var btn = document.getElementById('next');
        btn.disabled = true;
        btn.innerText = 'Thank you...'
    }

    function enableButton() {
        var btn = document.getElementById('next');
        btn.disabled = false;
        btn.innerText = 'Submit'
    }


    
function validateAbout(e) {

  disableButton();

    var selection = document.getElementById("email").value;
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!selection.match(pattern)) {
        
        alert('Please enter a valid email');
        e.preventDefault();
        enableButton();
        return false;
    }



 selection = document.getElementById("phone").value;
 pattern = /^[0-9+ ]{11,25}$/;

if (!selection.match(pattern)) {
    
  alert('Please enter a valid phone number');
  e.preventDefault();
  enableButton();
    return false;
}

 selection = document.getElementById("postcode").value;
 pattern = /^[0-9+a-zA-Z ]{6,10}$/;

if (!selection.match(pattern)) {
    
  alert('Please enter a valid postcode');
  e.preventDefault();
  enableButton();
    return false;
}
fbq('trackCustom', 'Submit Valuation');

}

    </script>

<?php
get_footer();