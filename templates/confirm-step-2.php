<?php
/**
* Template Name: Confirm Step 2
*
* @package WordPress
*/



if(!isset($_SESSION["vehicle"]["reg"]))
{
  //redirect to details
  header('Location: '.site_url( 'home' ));
}

get_header();



?>


<style>
  .address ul{
    list-style-type: none;
    margin-left:1em;
  }
.appointment-main{
  text-align: center;

}
.collection-form{
  text-align: left;
    margin: auto;
  }
  </style>

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
               Oh No!

              
                </h3> <p class="manual-entry-message">We haven't been able to value your car today but if you let us know your most convenient location, one of our experts to get in touch with you. .</p> 
       
             
             
      <div class="appointment-main">
      <div class="collection-form">
<form action="<?= site_url( 'enquiry-thanks' ) ?>" onsubmit='disableButton()' method="POST">
      <div class="form-items drop-off-loc">

        <div class="fdry-region" style="margin-bottom:20px">
          <h3>Wales</h3>
        </div>

        <div class="drop-off-inner" style="margin-bottom:35px">
          <div class="form-item wide">
            <input id="address4" type="radio" name="address"  value="Neath" >
            <label for="address4" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
               <ul>
                <h4>Sell Your Car Today Neath</h4> 
                <li>Neath Abbey Business Park</li> 
                <li>Neath Abbey</li> 
                <li>Neath</li> 
                <li>SA10 7DR</li> 
                <li>01792 940847</li>
              </ul>
            </label>
          </div> 
          <div class="form-item wide">
            <input id="address7" type="radio" name="address" value="Cardiff North" > 
            <label for="address7" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span> 
              <ul>
                <h4>Sell Your Car Today Cardiff North</h4> 
                <li>Abercynon Road</li> <li>Cilfynydd</li> 
                <li>Abercynon</li> 
                <li>CF46 6ST</li> 
                <li>01443 807821</li>
              </ul>
            </label>
          </div>
        </div>

        <div class="fdry-region" style="margin-bottom:20px">
          <h3>Midlands</h3>
        </div>

        <div class="drop-off-inner" style="margin-bottom:35px">
          <div class="form-item wide">
            <input id="address1" type="radio" name="address"  value="Coventry"  checked="checked"> 
            <label for="address1" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span> 
              <ul><h4>Sell Your Car Today Coventry</h4>
               <li>Silverstone Drive</li> 
               <li>Longford</li> 
               <li>Coventry</li> 
               <li>CV6 6PA</li> 
               <li>02476 935547</li>
              </ul>
            </label>
          </div> 
          <div class="form-item wide">
            <input id="address2" type="radio" name="address" value="Wednesbury"> 
            <label for="address2" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span> 
              <ul><h4>Sell Your Car Today Wednesbury</h4> 
                <li>Darlaston Rd</li> 
                <li>Walsall</li> 
                <li>Wednesbury</li> 
                <li>WS10 7HX</li> 
                <li>01212 702724</li>
              </ul>
            </label>
          </div> 
          <div class="form-item wide">
            <input id="address5" type="radio" name="address" value="Birmingham South" > 
            <label for="address5" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span> 
              <ul>
                <h4>Sell Your Car Today Birmingham South</h4> 
                <li>Stella House</li> 
                <li>Talbot Way</li> 
                <li>Birmingham</li> 
                <li>B10 0HJ</li> 
                <li>01212 702748</li>
              </ul>
            </label>
          </div> 
        </div>

        
        <div class="fdry-region" style="margin-bottom:20px">
          <h3>North</h3>
        </div>

        <div class="drop-off-inner" style="margin-bottom:35px">
          <div class="form-item wide">
            <input id="address3" type="radio" name="address" value="Rochdale"> 
            <label for="address3" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span> 
              <ul><h4>Sell Your Car Today Rochdale</h4> 
                <li>Sandbrook Way</li> 
                <li>Town Centre</li> 
                <li>Rochdale </li> 
                <li>OL11 1RY</li> 
                <li>01706 335272</li>
              </ul>
            </label>
          </div> 
        </div>

        <div class="fdry-region" style="margin-bottom:20px">
          <h3>Yorkshire</h3>
        </div>

        <div class="drop-off-inner" style="margin-bottom:35px">
          <div class="form-item wide">
            <input id="address6" type="radio" name="address" value="Rotherham" > 
            <label for="address6" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon icon-tick"><path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span> 
              <ul>
                <h4>Sell Your Car Today Rotherham</> 
                <li>Forge Way</li> 
                <li>Parkgate</li> 
                <li>Rotherham</li> 
                <li>S60 1SD</li> 
                <li>01709 212397</li>
              </ul></label>
          </div> 
        </div> 
        <div class="marketing-preferences">
          <button id="next"  type="submit" class="primary wide">
            Get in touch
          </button>
        </div>
        <div style="width: 100%; overflow: hidden; height: 575px; margin-top:20px; margin-left: auto; margin-right:auto;">
          <iframe 
          src="https://www.google.com/maps/d/embed?mid=1SUWRjuQ00X99Um8gZ2u14tDqroDnI8s&ehbc=2E312F"
            width="100%"
            height="600"
            frameborder="0"
            style="border:0; margin-top: -59px;">
          </iframe>
        </div>

      </div> 
</form>
</div></div>
             
             
             
             
             
             
             
             
                <!-- <div class="np-form step-1"><div class="form-items">
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
              </div> -->
            </div>
          </div> 
          <!-- <div class="marketing-preferences">
            <a href="<?php echo site_url( 'about-you-step-3' ) ?>" type="submit" disabled="disabled" class="primary wide">
              Step 2: About you
            </a>
          </div>  -->
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

    </script>
<?php
get_footer();