<?php

class Cap {

	private $dvla_url = "http://webservices.capnetwork.co.uk/capdvla_webservice/capdvla.asmx/DVLALookupVRM";
	private $valuation_url = "http://webservices.capnetwork.co.uk/CAPUsedValues_Webservice/capusedvalues.asmx/GetUsedValuation";
	private $subscriber_id = "99001";
	private $password = "990The";
	private $error = "";

	function __construct() {}

	public function vrmLookup($vrm = null) {

		$this->error = "";
		$vrm = strtoupper(str_ireplace(" ", "", strtoupper($vrm)));

		$data = [
			'SubscriberID' => $this->subscriber_id,
			'Password' => $this->password,
			'vrm' => $vrm
		];

		$data_string = "";
		foreach($data as $key => $value) { $data_string .= $key.'='.$value.'&'; }
		rtrim($data_string, '&');

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $this->dvla_url);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_USERPWD, $this->subscriber_id.":".$this->password);

		$result = curl_exec($ch);

		if($result === false) {

			$error = curl_error($ch);
      $this->error = $error;
			return false;

		} else {

			curl_close($ch);
			$xml = simplexml_load_string($result);

			if($xml->SUCCESS == 'true') {

				$car_data = [];

				if($xml->MATCHLEVEL->DVLA == "1") {
					$car_data['co2'] = (string) $xml->DATA->DVLA->CO2[0];
					$car_data['colour'] = (string) $xml->DATA->DVLA->COLOUR[0];
					$car_data['vin'] = (string) $xml->DATA->DVLA->VIN[0];
					$car_data['body_type'] = (string) $xml->DATA->DVLA->BODYTYPE[0];
					$car_data['engine_capacity'] = (string) $xml->DATA->DVLA->ENGINECAPACITY[0];
					$car_data['first_registered'] = (string) $xml->DATA->DVLA->FIRSTREG_DATE[0];
					$car_data['doors'] = (string) $xml->DATA->DVLA->DOORS[0];
					$car_data['model'] = (string) $xml->DATA->DVLA->MODEL[0];
					$car_data['seating'] = (string) $xml->DATA->DVLA->SEATING[0];
					$car_data['wheel_plan'] = (string) $xml->DATA->DVLA->WHEELPLAN[0];
					$car_data['is_imported'] = (string) $xml->DATA->DVLA->ISIMPORTED[0];
				}

				if($xml->MATCHLEVEL->CAP == "1") {
					$car_data['cap_id'] = (string) $xml->DATA->CAP->CAPID[0];
					$car_data['cap_code'] = (string) $xml->DATA->CAP->CAPCODE[0];
					$car_data['manufacturer_code'] = (string) $xml->DATA->CAP->MANUFACTURER_CODE[0];
					$car_data['vehicle_type'] = (string) $xml->DATA->CAP->VEHICLETYPE[0];
					$car_data['manufacturer'] = (string) $xml->DATA->CAP->MANUFACTURER[0];
					$car_data['model'] = (string) $xml->DATA->CAP->RANGE[0];
					$car_data['model_2'] = (string) $xml->DATA->CAP->MODEL[0];
					$car_data['model_full'] = (string) $xml->DATA->CAP->DERIVATIVE[0];
					$car_data['fuel_type'] = (string) $xml->DATA->CAP->FUELTYPE[0];
					$car_data['drive_train'] = (string) $xml->DATA->CAP->DRIVETRAIN[0];
					$car_data['transmission'] = (string) $xml->DATA->CAP->TRANSMISSION[0];
					$car_data['registered_date'] = (string) $xml->DATA->CAP->PLATE_YEAR.'-'.$xml->DATA->CAP->PLATE_MONTH.'-1';
					$car_data['range'] = (string) $xml->DATA->CAP->RANGE[0];
					$car_data['plate_year'] = (string) $xml->DATA->CAP->PLATE_YEAR;
					$cat_data['plate_month'] = (string) $xml->DATA->CAP->PLATE_MONTH;
				}

        // echo json_encode($car_data);
				return $car_data;

			}
			else {

        $this->error = $xml->ERRORMESSAGE;
				return false;

			}
		}

		return false;
	}

// 	public function valuation($cap_id = null, $registered_date = null, $mileage = 80000) {

// 		$dataset_date = date('Y/m').'/01';
// 		$miles = ($mileage > 80000) ? 80000 : $mileage;

//     	$value_data = [
// 			'Subscriber_ID' => '99001',
// 			'Password' => '990The',
// 			'Database' => 'Car',
// 			'CAPID' => (string) $cap_id,
// 			'CAPCode' => '',
// 			'RegistrationDate' => date("Y/m/d", strtotime($registered_date)),
// 			'DatasetDate' => $dataset_date,
// 			'JustCurrent' => 'true',
// 			'Mileage' => $miles
// 		];

// 		$value_string = "";
// 		foreach($value_data as $key=>$value) { $value_string .= $key.'='.$value.'&'; }

// 		rtrim($value_string, '&');
// 		$ch = curl_init();

// 		curl_setopt($ch, CURLOPT_URL, $this->valuation_url);
// 		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
// 		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
// 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 		curl_setopt($ch, CURLOPT_POST, true);
// 		curl_setopt($ch, CURLOPT_HEADER, "application/x-www-form-urlencoded");
// 		curl_setopt($ch, CURLOPT_POSTFIELDS, $value_string);
// 		curl_setopt($ch, CURLOPT_USERPWD, $user.":".$password);

// 		$result = curl_exec($ch);

// 		if($result === false)
// 		{
// 			$error = curl_error($ch);
// 			$this->error = $error;
// 			return false;
// 		}
// 		else
// 		{
// 			curl_close($ch);
// 			$xml = simplexml_load_string($result);
// 			$json = json_encode($xml);
// 			$array = json_decode($json, true);

// 			$doc = new DOMDocument();
// 			$doc->loadXML($result);
			
// 			$retail = $doc->getElementsByTagName("Retail");
// 			$clean = $doc->getElementsByTagName("Clean");
// 			$average = $doc->getElementsByTagName("Average");
// 			$below = $doc->getElementsByTagName("Below");

// 			$retail = $retail->item(0)->nodeValue;
// 			$clean = $clean->item(0)->nodeValue;
// 			$average = $average->item(0)->nodeValue;
// 			$below = $below->item(0)->nodeValue;

// 			$our_retail = $retail + 500;
// 			$our_clean = $clean + 500;
// 			$our_average = $average + 500;
// 			$our_below = $below + 500;

// 			// TISH-1167
// 			// $value = $our_average;
// 			$value = $our_clean;

// 			if((int) $mileage >= 80000) {
// 				// if((int) $our_average > 500) $value = $average;
// 				if((int) $our_clean > 500) $value = $clean;
// 				else return false;
// 			}

// 			if($clean == null) return false;
// 			else if($value < 500) {
// 				$diff = 500 - $value;
// 				$value = $value + $diff;
// 				$value = number_format($value, 2, '.', '');
// 			}

// 			$data = [
// 				'retail' => $retail,
// 				'clean' => $clean,
// 				'average' => $average,
// 				'below' => $below,
// 				'our_retail' => $our_retail,
// 				'our_clean' => $our_clean,
// 				'our_average' => $our_average,
// 				'our_below' => $our_below,
// 				'valuation' => $value,
// 			];

// 			return $data;
// 		}

// 		return false;
//   }
}