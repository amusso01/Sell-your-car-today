<?php

class VMS
{

	private $base_url = "https://autoconvert.lz.lc/";
	//private $base_url = "http://82.16.164.41:5011/";

	private $valuation_url = "api/appraisals/valuations";
	private $booking_url = "api/appraisals/bookings";
	private $enquiry_url = "api/appraisals/contact-request";
	private $apiKey = "b0af0cf782e945e7b7392010ae7e0091";
	private $error = "";

	function __construct()
	{
	}

	public function setBooking($data)
	{


		$ch = curl_init($this->base_url . $this->booking_url);
		# Setup request to send json via POST.
		$payload = json_encode($data);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', "Authorization: bearer " . $this->apiKey));
		curl_setopt($ch, CURLOPT_POST, true);

		# Return response instead of printing.
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		# Send request.
		$result = curl_exec($ch);
		$error_message = '';


		if ($errno = curl_errno($ch)) {
			$error_message = curl_strerror($errno);
		}

		curl_close($ch);
		# Print response.

		if ($error_message != '') {
			return "cURL error ({$errno}):\n {$error_message}";
		}
		else {
			return $result;
		}
	}




	public function sendEnquiry($data)
	{


		$ch = curl_init($this->base_url . $this->enquiry_url);
		# Setup request to send json via POST.
		$payload = json_encode($data);


		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', "Authorization: bearer " . $this->apiKey));
		curl_setopt($ch, CURLOPT_POST, true);

		# Return response instead of printing.
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		# Send request.
		$result = curl_exec($ch);

		$error_message = '';

		if ($errno = curl_errno($ch)) {
			$error_message = curl_strerror($errno);
		}

		curl_close($ch);
		# Print response.	
		print_r($result);
		if ($error_message != '') {
			return "cURL error ({$errno}):\n {$error_message}";

		}
		else {
			return $result;
		}
	}

	public function valuationLookup($data)
	{


		$ch = curl_init($this->base_url . $this->valuation_url);
		# Setup request to send json via POST.
		$payload = json_encode($data);


		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', "Authorization: bearer " . $this->apiKey));
		curl_setopt($ch, CURLOPT_POST, true);

		# Return response instead of printing.
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		# Send request.
		$result = curl_exec($ch);

		$error_message = '';

		if ($errno = curl_errno($ch)) {
			$error_message = curl_strerror($errno);
		}

		curl_close($ch);
		# Print response.

		if ($error_message != '') {
			return "cURL error ({$errno}):\n {$error_message}";

		}
		else {
			return $result;
		}
	}
}