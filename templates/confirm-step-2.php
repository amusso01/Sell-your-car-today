<?php
/**
* Template Name: Confirm Step 2
*
* @package WordPress
*/
get_header();
?>

<main role="main" class="site-main confirm-2-main">

<section class="valuation-steps ">
  <div class="sw content content-block--small">
    <div>
      <span out-in="">
        <div class="step-2">
           <div class="center">
              <div class="about-form">
                <a class="valuation-back" href="<?php echo site_url('/valuation-step-2') ?>">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-chevron-left"><path d="M14 6.99988L9.7071 11.2928C9.31658 11.6833 9.31658 12.3165 9.70711 12.707L14 16.9999" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> Back
                </a> <h3 class="title">
                Confirm your car manually

                <span class="steps">Step 1 of 3</span>
                </h3> <p class="manual-entry-message">Let’s try to find your car using the fields provided below. If you’re unsure about any of the questions, feel free to <a href="/contact" class="" title="Contact us">contact us</a> .</p> 
                <div class="np-form step-1"><div class="form-items">
                  <div class="col-6 form-container form-item container">
                    <label for="manual_make">Select Model</label> 
                    <input id="manual_make" placeholder="Please enter" type="text" required="required"> 
                    <span class="form-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                  </div> 
                  <div class="col-6 form-container form-item container">
                    <label for="manual_model">Select make</label> 
                    <input id="manual_model" placeholder="Please enter" type="text" required="required"> 
                      <span class="form-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                  </div> 
                  <div class="col-6 form-container form-item container">
                    <label for="manual_trim">Trim type</label>
                    <input id="manual_trim" placeholder="Please enter" type="text" required="required"> 
                    <span class="form-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                  </div> <div class="col-6 form-container form-item container">
                    <label for="manual_fuel">Fuel type</label> 
                    <input id="manual_fuel" placeholder="Please enter" type="text" required="required"> 
                    <span class="form-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                  </div> 
                  <div class="col-6 form-container form-item container">
                    <label for="manual_year">Registration year</label> 
                    <input id="manual_year" placeholder="Please enter" type="text" required="required"> 
                    <span class="form-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                  </div> 
                  <div class="col-6 form-container form-item container">
                    <label for="manual_color">Colour</label> 
                    <input id="manual_color" placeholder="Please enter" type="text" required="required"> 
                    <span class="form-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                  </div> 
                  <div class="col-6 form-container form-item container">
                    <label for="previous_keepers">Previous owners</label> 
                    <input id="previous_keepers" placeholder="Please enter" type="number" required="required"> 
                    <span class="form-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                  </div> 
                  <div class="col-6 form-container form-item container">
                    <label for="mileage">Current mileage</label> 
                    <input id="mileage" type="number" required="required"> 
                    <span class="form-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="marketing-preferences">
            <a href="<?php echo site_url( 'about-you-step-3' ) ?>" type="submit" disabled="disabled" class="primary wide">
              Step 2: About you
            </a>
          </div> <!---->
        </div>
      </span>
    </div>
  </div>
</section>


</main><!-- #main -->

<?php
get_footer();