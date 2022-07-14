<?php
/**
* Template Name: Summary step 4
*
* @package WordPress
*/
get_header();
?>

<main role="main" class="site-main valuation-4-main valuation-steps">

  <section class=" valuation-container">
    <div>
      <div class="sw valuation-upper content-block">
        <div class="center valuation-inner">
          <h2 class="title">
            Your valuation

            <span class="steps">Step 3 of 3</span>
          </h2> 
          <p>
            Based on the assumptions we have made and the information you've given us, we value your
            car at:
          </p> 
          <h2 class="price-wrapper">
            <span>£100</span> 
            <span>£317</span> 
            <span>£569</span> 
            <span>£947</span>
          </h2> 
          <div class="valuation-summary-info" >
            <p>No nasty surprises, we value cars within a range. If your car is in good condition and has service history then we’d be happy to pay the price in the green of the range.</p>
            <p>If you are in the market for a replacement car, let us offer you our highest part-exchange super valuation at the very top of the spectrum against any of over 1,000 cars we have for sale at the drop-off location.</p>
            <p>If your car has seen better days and is in need of a bit of TLC then expect a valuation in the red of the range.</p>
            <p>A full appraisal of your car will be made on the day. We love paying green prices for nice cars and remember to book your appointment within 48 hours for an extra £100 – we pay more guaranteed!</p>
          </div> 
          <h3 class="col-6 center valuation-subheader">What would you like to do?</h3> 
          <div class="cta-summary">
            <button data-cta='sell' class="outline">
                Sell for £100 more
            </button> 
            <button data-cta='book' class="outline">
                Book an appointment
            </button> 
            <button data-cta='no-sell' class="outline">
                Not ready to sell
            </button>
          </div>
        </div>
      </div> 

      <div id='fdryAction' class="actions content-block">
        <div class="container-small">
          <div data-sell='no-sell' class="ready single-action">
            <h3>Your valuation is valid for 7 days...</h3>
            <p>We will send this valuation to your inbox - your valuation is valid for 7 days. During this time you can contact to accept, discuss or decline this valuation. After 7 days, you will need to re-enter your registration for an up-to-date valuation.</p>
            <a href="<?php echo site_url() ?>" class="primary button">Return to homepage</a>
          </div>
          <div data-sell='book'  class="ready single-action">
            <h3>We really look forward to seeing you. Let’s set a date.</h3>
            <a href="<?php echo site_url('/appointment') ?>" class="button primary">Select a date</a>
          </div>
          <div data-sell='sell' class="ready single-action">
            <h3>We really look forward to seeing you. Let’s set a date.</h3>
            <a href="<?php echo site_url('/appointment') ?>" class="button primary">Select a date</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- #main -->

<?php
get_footer();