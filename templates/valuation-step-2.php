<?php
/**
* Template Name: Valuation Step 2
*
* @package WordPress
*/
get_header();
?>

<main role="main" class="site-main valuation-2-main">

  <section class=" content-block--small">
    <h3 class="title">
    Is This Your Car?
      <span class="steps">Step 1 of 3</span>
    </h3>

    <div class="valuation-2-step-1">

      <div class="vehicle">
        <aside class="vehicle-details">
          <div class="head">
            <div class="item-name">
              <strong>WU04 XKT</strong>
            </div> 
            <div class="item-name">
              <span>MERCEDES</span> <span>SPRINTER 311 CDI LWB</span>
            </div>
          </div> <!---->

          <ul>
            <li>
              <span>Colour</span> <strong>WHITE</strong>
            </li> 
            <li>
              <span>Transmission</span> <strong>Manual</strong>
            </li> 
            <li>
              <span>Engine size</span> <strong>2151cc</strong>
            </li> 
            <li>
              <span>First registered</span> <strong>22nd Apr 2004</strong>
            </li> 
            <li class="prev">
              <span>
                Previous owners
                <small>Please update if incorrect</small>
              </span> 
              <input id="previous-owners" type="number" class="move">
            </li>
          </ul> 
          <a href="<?php echo site_url( '/confirm-your-car-manually' ) ?>" class="clear cta-container-step-1">
            <button title="This Is Not My Car" class="outline">
              No, this isn't my car
            </button>
          </a>
        </aside>
      </div>


      <div class="info">
        <div class="service-history">
          <h3>Please confirm...</h3> 
          <div class="np-form">
            <div class="form-container form-item container">
              <label for="mileage">Current mileage<sup>*</sup></label> 
              <input id="mileage" type="number" required="required" min="250" class="move"> 
              <span class="form-check">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
              </span></div>
            </div>
        </div>
      </div>
    </div>

    <div class="assumtions col-12">
      <p>
        We've made some

        <a href="#" title="View These Assumptions">
            assumptions
        </a>

        about the condition of your car in order to speed up your valuation process. Please see our

        <a href="/terms-and-conditions" class="" title="View our Terms and Conditions">
          terms and conditions
        </a>

        and proceed if you are happy.

        <a href="<?php echo site_url( 'about-you-step-3' ) ?>" class="primary">
            Step 2: About you
        </a>
                              
      </p>
    </div>

  </section>


</main><!-- #main -->

<?php
get_footer();