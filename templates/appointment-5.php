<?php
/**
* Template Name: Appointment step 5
*
* @package WordPress
*/


function send_remote_syslog($message, $component = "Appointment", $program = "SYCT") {
  $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
  foreach(explode("\n", $message) as $line) {
    $syslog_message = "<22>" . date('M d H:i:s ') . $program . ' ' . $component . ': ' . $line;
    socket_sendto($sock, $syslog_message, strlen($syslog_message), 0, "logs4.papertrailapp.com", 29508);
  }
  socket_close($sock);
}

$f = session_id();

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

# send_remote_syslog("Any log message");
# send_remote_syslog("Something just happened", "other-component");
# send_remote_syslog("Something just happened", "a-background-job-name", "whatever-app-name");


$endDate = date('Y-m-d', strtotime('+7 days'));
if(isset($_GET["more"]))
{
  //restrict it to next 48 hours
  $endDate = date('Y-m-d', strtotime('+2 days'));

}

//startdate tommorrow if after 6pm

$hour = $var = date('H');

if($hour > 17)
{
  $datetime = new DateTime('tomorrow');
  $startdate = $datetime->format('Y-m-d');
}else{
  $startdate = date('Y-m-d', time());
}



//do not allow dates or times before now


$date = new DateTime($_SESSION['vehicle']['registered_date'] );

if(isset($_GET["vid"]))
{
  $vid = $_GET["vid"];
}else{
  session_write_close();
  //redirect to details
  header('Location: /' );
 exit();
}

get_header();



?>

<style>
  .address ul{
    list-style-type: none;
    margin-left:1em;
  }
  </style>
<main role="main" class="site-main appointment-main ">


<section><div class="content">
  <div class=""> 
    <div class="col-6 center drop-off-top content-block--small">
      <h3 class="title">
          Your appointment
      </h3> 
      <p>Our team can’t wait to buy your car, use our simple two-step appointment tool below.</p> 
      <!-- <span out-in="">
        <div>
          <div class="vehicle wide">
            <aside class="vehicle-details">
              <div class="head">
                <div>
                  <div class="item-name">
                    <strong><?= $_SESSION['vehicle']['reg']  ?></strong>
</div>
<div class="item-name">
  <span>
    <?= $_SESSION['vehicle']['manufacturer']  ?>
  </span>
  <span>
    <?= $_SESSION['vehicle']['model_full']  ?>
  </span>
</div>
</div>
</div>
<div class="item">
  <span>Colour</span>
  <strong>
    <?= $_SESSION['vehicle']['colour']  ?>
  </strong>
</div>
<div class="item">
  <span>Transmission</span>
  <strong>
    <?= $_SESSION['vehicle']['transmission']  ?>
  </strong>
</div>
<div class="item">
  <span>Engine size</span>
  <strong>
    <?= $_SESSION['vehicle']['engine_capacity']  ?>cc
  </strong>
</div>
<div class="item">
  <span>First registered</span>
  <strong>
    <?= date_format($date, 'jS M Y');  ?>
  </strong>
</div>

</aside>
</div>
</div>
</span> -->
<!-- <div class="collection-assist">
        <h3>Need Assistance?</h3> 
        <p>Do you wish to speak to us about this valuation? Perhaps you wish to know more about our service? </p> 
        <a href="/contact" title="Contact us" class="button secondary">
          Contact Us
        </a> 
        <a href="/help" title="Selling Tips" class="button secondary">
            Help
        </a> 
        <a href="/about" title="About Us" class="button secondary">
            About Us
        </a>
      </div> -->
</div>
</div>
<div class="collection-form content-block--small">
  <div class="col-6 center np-form step-1 drop-off-bottom">
    <h3>Make your appointment</h3>
    <form action="<?php echo site_url('thank-you') ?>"  name="appointment_booked" id="appointment_booked"
      onsubmit='return disableButton()' method="POST">
      <input id="vid" name="vid" type="hidden" value="<?= $vid ?>" />
      <div class="form-items drop-off-dates">
        <div class="form-item">
          <div class="form-desc">
            <p>Pick a date</p>
          </div>
          <input id="collection_date" onchange="setTime()" name="collection_date" type="date"
            min="<?= $startdate ?>" max="<?= $endDate ?>" value="<?= $startdate ?>"
            class="move">
        </div>
        <div class="form-item">
          <div class="form-desc">
            <p>Pick your time</p>
          </div>
          <select id="time" name="time" class="">
            <option value=""></option>
            <option value="09:00:00">
              9:00
            </option>
            <option value="09:15:00">
              9:15
            </option>
            <option value="09:30:00">
              9:30
            </option>
            <option value="9:45:00">
              9:45
            </option>
            <option value="10:00:00">
              10:00
            </option>
            <option value="10:15:00">
              10:15
            </option>
            <option value="10:30:00">
              10:30
            </option>
            <option value="10:45:00">
              10:45
            </option>
            <option value="11:00:00">
              11:00
            </option>
            <option value="11:15:00">
              11:15
            </option>
            <option value="11:30:00">
              11:30
            </option>
            <option value="11:45:00">
              11:45
            </option>
            <option value="12:00:00">
              12:00
            </option>
            <option value="12:15:00">
              12:15
            </option>
            <option value="12:30:00">
              12:30
            </option>
            <option value="12:45:00">
              12:45
            </option>
            <option value="13:00:00">
              13:00
            </option>
            <option value="13:15:00">
              13:15
            </option>
            <option value="13:30:00">
              13:30
            </option>
            <option value="13:45:00">
              13:45
            </option>
            <option value="14:00:00">
              14:00
            </option>
            <option value="14:15:00">
              14:15
            </option>
            <option value="14:30:00">
              14:30
            </option>
            <option value="14:45:00">
              14:45
            </option>
            <option value="15:00:00">
              15:00
            </option>
            <option value="15:15:00">
              15:15
            </option>
            <option value="15:30:00">
              15:30
            </option>
            <option value="15:45:00">
              15:45
            </option>
            <option value="16:00:00">
              16:00
            </option>
            <option value="16:15:00">
              16:15
            </option>
            <option value="16:30:00">
              16:30
            </option>
            <option value="16:45:00">
              16:45
            </option>
            <option value="17:00:00">
              17:00
            </option>
            <option value="17:15:00">
              17:15
            </option>
            <option value="17:30:00">
              17:30
            </option>
            <option value="17:45:00">
              17:45
            </option>
            <option value="18:00:00">
              18:00
            </option>
            <option value="18:15:00">
              18:15
            </option>
            <option value="18:30:00">
              18:30
            </option>
            <option value="18:45:00">
              18:45
            </option>
          </select>
          <label for="time">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
              class="icon icon-chevron-down">
              <path d="M17.0001 10L12.7072 14.2929C12.3167 14.6834 11.6835 14.6834 11.293 14.2929L7.00012 10"
                stroke="#A2A9AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </label>
          <p></p>
        </div>
      </div>
      <p>Choose your preferred drop-off location</p>



      <div class="form-items drop-off-loc">

        <div class="fdry-region" style="margin-bottom:20px">
          <h3>Wales</h3>
        </div>

        <div class="drop-off-inner" style="margin-bottom:35px">
          <div class="form-item wide">
            <input id="address4" type="radio" name="address" value="cded943c-f4fc-4ed3-8d0b-e73adde5b790">
            <label for="address4" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tick">
                  <path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span>
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
            <input id="address7" type="radio" name="address" value="607fb477-6e5f-4433-9c2f-5d9fd2dd58fc">
            <label for="address7" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tick">
                  <path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span>
              <ul>
                <h4>Sell Your Car Today Cardiff North</h4>
                <li>Abercynon Road</li>
                <li>Cilfynydd</li>
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
            <input id="address1" type="radio" name="address" value="6d1ab16a-8545-412d-97f7-e0a50e13a993"
              checked="checked">
            <label for="address1" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tick">
                  <path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span>
              <ul>
                <h4>Sell Your Car Today Coventry</h4>
                <li>Silverstone Drive</li>
                <li>Longford</li>
                <li>Coventry</li>
                <li>CV6 6PA</li>
                <li>02476 935547</li>
              </ul>
            </label>
          </div>
          <div class="form-item wide">
            <input id="address2" type="radio" name="address" value="a6f8f000-58a9-47d9-9ac2-de03b802a8e1">
            <label for="address2" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tick">
                  <path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span>
              <ul>
                <h4>Sell Your Car Today Wednesbury</h4>
                <li>Darlaston Rd</li>
                <li>Walsall</li>
                <li>Wednesbury</li>
                <li>WS10 7HX</li>
                <li>01212 702724</li>
              </ul>
            </label>
          </div>
          <div class="form-item wide">
            <input id="address5" type="radio" name="address" value="a8dbf70e-03ee-4aed-a4d5-8aada61aa7db">
            <label for="address5" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tick">
                  <path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span>
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
            <input id="address3" type="radio" name="address" value="a03835b5-bb34-4d15-865d-b56c7543ad68">
            <label for="address3" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tick">
                  <path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span>
              <ul>
                <h4>Sell Your Car Today Rochdale</h4>
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
            <input id="address6" type="radio" name="address" value="58926689-a2fd-4933-97ce-67932bc7a495">
            <label for="address6" class="address">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tick">
                  <path d="M7.58887 12.1806L10.4677 15.0594L16.3999 9.12714" stroke="#333333" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span>
              <ul>
                <h4>Sell Your Car Today Rotherham</h4>
                <li>Forge Way</li>
                <li>Parkgate</li>
                <li>Rotherham</li>
                <li>S60 1SD</li>
                <li>01709 212397</li>
              </ul>
            </label>
          </div>
        </div>

        <div class="cta-collection">
          <p>
            I confirm that the information I have given before submitting them are accurate to the best of my knowledge.
            I also confirm an understanding that the date and time requested above are available on a
            first-come-first-served basis.
          </p>
          <button type="submit" id="next" class="primary wide">
            Confirm Appointment
          </button>
          <span class="error" style="color: red;"></span>

          <h3 style="margin-top: 25px; margin-bottom:10px;">Important please bring along with you:</h4>
          <ul>
              <li>V5C registration document</li> 
              <li>Photo ID and recent proof of address</li> 
              <li>MOT certificate (if applicable)</li> 
              <li>If you have outstanding finance on the car, please bring a current settlement letter from your lender</li> 
              <li>The car!</li>
          </ul> 

        </div>
        <div
          style="width: 100%; overflow: hidden; height: 575px; margin-top:20px; margin-left: auto; margin-right:auto;">
          <iframe src="https://www.google.com/maps/d/embed?mid=1SUWRjuQ00X99Um8gZ2u14tDqroDnI8s&ehbc=2E312F"
            width="100%" height="600" frameborder="0" style="border:0; margin-top: -59px;">
          </iframe>
        </div>

        <div class="why-do-we">
          <h4>Why do we ask for this information?</h4>
          <p>We gather this information to aid us in the valuation of your vehicle, to ensure we are able to contact you
            and to gain an understanding of the location of the vehicle that will be collected.</p>
          <p>When you obtain a valuation, you agree to the terms and conditions, privacy and cookies policy, and our
            data and communication policy, which includes marketing communications regarding your vehicle. You can
            update your communication preferences at any time by visiting your contact preferences.</p>
        </div>
    </form>



  </div>
</div>
</div>
<!---->
</div>
</section>


</main><!-- #main -->




<script type="text/javascript">



  function disableButton() {

    if (!minDate())
    {
      return false;
    }
    //alert('d');
    if (!maxDate())
    {
      return false;
    }

    var dateInput = document.getElementById('collection_date');
    const selectedDate = new Date(dateInput.value);
      
    if (selectedDate.getDate() == 19)
    {
      alert("We are very sorry but we are closed this day.");
      return false;
    }


    var select = document.getElementById('time');
    var value = select.options[select.selectedIndex].value;


    if (value == "") {
      // e.preventDefault();

      alert('Please enter a time for your appointment');
      return false;
    }

    fbq('trackCustom', 'Confirm appointment');
    
    var btn = document.getElementById('next');
    btn.disabled = true;
    btn.innerText = 'Thank you...'
  }

  window.addEventListener('load', (event) => {
    setTime();

  });


  function minDate() {

    var dateInput = document.getElementById('collection_date');
    const checkInDate = new Date(dateInput.value);
    //alert(checkInDate);
    const nowDate = new Date();
    nowDate.setHours(0, 0, 0, 0);
    if (checkInDate < nowDate) {
    alert("Appointment date cannot be in the past!");
    return false;
    }
    return true;
}

  function maxDate() {

    var dateInput = document.getElementById('collection_date');
  const maxDate = new Date(dateInput.getAttribute('max'));
  const selectedDate = new Date(dateInput.value);

  maxDate.setHours(23, 0, 0, 0);
 
  if (maxDate < selectedDate) {
    
    let t = document.getElementById('error');
    t.innerHTML = "Appointment date too far in the future!";
    t.setAttribute("display", "block");
   // alert("Appointment date too far in the future!");
    return false;
  }
  return true;
}



  function setTime() {
    const dates = document.getElementById('collection_date').value.split('-');
    document.getElementById("time").value = "";
    for (let i = 0; i < document.getElementById('time').children.length; i++) {
      const time = document.getElementById('time').children[i].value.split(':');
      if (time.length > 0) {

        let y = new Date(dates[0], dates[1] - 1, dates[2], time[0], time[1])
        const g = new Date();

        if (y.getDay() == 0 || y.getDay() == 6) {

          if (g > y) {
            document.getElementById('time').children[i].setAttribute('disabled', 'disabled');
          } else {
            document.getElementById('time').children[i].removeAttribute('disabled');
          }
          if (time[0] > 17) {
            document.getElementById('time').children[i].setAttribute('disabled', 'disabled');
          }

        } else {
          if (g > y) {
            document.getElementById('time').children[i].setAttribute('disabled', 'disabled');
          } else {
            document.getElementById('time').children[i].removeAttribute('disabled');
          }
          if (time[0] < 10) {
            document.getElementById('time').children[i].setAttribute('disabled', 'disabled');
          }

        }




      }
    }
  }

</script>



<?php
get_footer();