<?php
/**
* Template Name: Valuation Step 2
*
* @package WordPress
*/


include('includes/cap.php');

function send_remote_syslog($message, $component = "Mileage", $program = "SYCT") {
  $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
  foreach(explode("\n", $message) as $line) {
    $syslog_message = "<22>" . date('M d H:i:s ') . $program . ' ' . $component . ': ' . $line;
    socket_sendto($sock, $syslog_message, strlen($syslog_message), 0, "logs4.papertrailapp.com", 29508);
  }
  socket_close($sock);
}

$f = session_id();


if(isset($_POST["mileage"]))
{

  $_SESSION['vehicle']['mileage'] = $_POST['mileage'];


  
if ($f)
{
  
if (isset($_SESSION['vehicle']))
{
  send_remote_syslog($f . " -" . json_encode($_SESSION['vehicle']));
}else{
  send_remote_syslog($f . " -" . "no vehicle in session  :(");

}

}else{
  send_remote_syslog("no session id :(");

}

 session_write_close();
  //redirect to details
  header('Location: /about-you-step-3' );
 exit();

}

if(isset($_GET["reg"]))
{
  $vrm = str_replace(" ", "", strtoupper($_GET['reg']));
}
if(isset($_GET["regFooter"]))
{
  $vrm = str_replace(" ", "", strtoupper($_GET['regFooter']));
}


	$cap = new Cap();

	$vehicle = $cap->vrmLookup($vrm);

  $_SESSION['vehicle'] = $vehicle;
  $_SESSION['vehicle']['reg'] = $vrm;




if(!$vehicle)
{
  session_write_close();
  //redirect to details
  header('Location: /about-you-step-3' );
  exit;
}




$date = new DateTime($vehicle['registered_date'] );


get_header();

  

?>

<style>
  .step-link{
    font-size: 14px;
    color: #00b5da!important;
  }
</style>

<main role="main" class="site-main valuation-2-main">

  <section class=" content-block--small">
    <h3 class="title">
     Your Car
      <span class="steps">Step 1 of 3</span>
    </h3>
<form method="POST"  onsubmit='disableButton()'>
    <div class="valuation-2-step-1">

      <div class="vehicle">
        <aside class="vehicle-details">
          <div class="head">
            <div class="item-name">
              <strong><?= $_SESSION['vehicle']['reg'] ?></strong>
            </div> 
            <div class="item-name">
              <span><?= $vehicle['manufacturer']  ?></span> <span><?= $vehicle['model_full']  ?></span>
            </div>
          </div> <!---->

          <ul>
            <li>
              <span>Colour</span> <strong><?= $vehicle['colour']  ?></strong>
            </li> 
            <li>
              <span>Transmission</span> <strong><?= $vehicle['transmission']  ?></strong>
            </li> 
            <li>
              <span>Engine size</span> <strong><?= $vehicle['engine_capacity']  ?>cc</strong>
            </li> 
            <li>
              <span>First registered</span> <strong><?= date_format($date, 'jS M Y');  ?></strong>
            </li> 
          
          </ul> 
          <!-- <a href="<?php echo site_url( '/car-enquiry' ) ?>" class="clear cta-container-step-1">
            <button title="This Is Not My Car" class="outline">
              No, this isn't my car
            </button>
          </a> -->
        </aside>
      </div>


      <div class="info">
        <div class="service-history">
          <h3>Please confirm...</h3> 
          <div class="np-form">
            <div class="form-container form-item container">
              <label for="mileage">Current mileage<sup>*</sup></label> 
              <input id="mileage" type="number" required="required" name="mileage" min="250" max="250000" class="move"> 
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


            assumptions
        </a>

        about the condition of your car in order to speed up your valuation process. Please see our

        <a href="/car-purchase-terms-conditions/" target="_blank" class="step-link" title="View our Terms and Conditions">
          terms and conditions
        </a>

        and proceed if you are happy.

        <button type="submit" id="next"  class="primary">
            Step 2: About you
        </button>
                              
      </p>
    </div>
</form>
  </section>


</main><!-- #main -->



<script type="text/javascript">
    function disableButton() {

        fbq('trackCustom', 'About You');
        var btn = document.getElementById('next');
        btn.disabled = true;
        btn.innerText = 'Thank you...'
    }
  </script>

<?php
get_footer();