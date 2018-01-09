<?php
// Just snippets, cannot run independently

	//APIS
	
	// C2B API
	public function c2b(){
		$request_data = array(
			'ShortCode' => $this->paybill,
			'ResponseType' => 'Completed',
			'ConfirmationURL' => 'http://ben.localhost.run/mpesa/callbacks/c2b/confirm.php', //Confirmation URL, should be accessible from internet
			'ValidationURL' => 'http://ben.localhost.run/mpesa/callbacks/c2b/validation.php' //CValidation URL, should be accessible from internet
		);
		$data = json_encode($request_data);
		$url = $this->base_url.'c2b/v1/registerurl';
		$response = $this->submit_request($url, $data); //Submit request
		return $response;
	}
	//C2B Simulation
	public function simulate_c2b($amount, $msisdn, $ref){
		$data = array(
			'ShortCode' => $this->paybill, //Paybill number
			'CommandID' => 'CustomerPayBillOnline',
			'Amount' => $amount, //Amount
			'Msisdn' => $msisdn, //Phone number in the format 254716483805
			'BillRefNumber' => $ref //Reference
		);
		$data = json_encode($data);
		$url = $this->base_url.'c2b/v1/simulate'; //Endpoint
		$response = $this->submit_request($url, $data); //Submit Request
		return $response;
	}

