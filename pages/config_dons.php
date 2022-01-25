<?php 
	//VISA CARD 
	require_once 'HTTP/Request2.php';
	$request = new HTTP_Request2();
	$request->setUrl('http://preproduction-gateway.bizao.com/debitCard/v1');
	$request->setMethod(HTTP_Request2::METHOD_POST);
	$request->setConfig(array(
	  'follow_redirects' => TRUE
	));
	$request->setHeader(array(
	  'Content-Type' => 'application/json',
	  'country-code' => 'ci',
	  'category' => 'BIZAO-RETAIL',
	  'lang' => 'fr',
	  'authorization' => 'Bearer ed8d0fe5-19f6-3ba3-9936-9b1456345bc3',
	  'Cookie' => 'SERVERID=s0; 8d387f86a05a3fda48986e2ed42ee33c=75a9a2f6a9ddc14f2b99679b749d70c3; PHPSESSID=ovi27ga6ruddk25s5c7qslecqr; SERVERID=s0; SERVERID=s0'
	));
	$request->setBody('{\n\n "order_id": "ccdcbht01",\n\n "reference": "ACBPNV",\n\n "amount": 100,\n\n "currency": "XOF",\n\n "return_url": "http://35.241.204.249:8080/ecobanq/mock",\n\n "state": "test"\n\n}');
	try {
	  $response = $request->send();
	  if ($response->getStatus() == 200) {
	    echo $response->getBody();
	  }
	  else {
	    echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
	    $response->getReasonPhrase();
	  }
	}
	catch(HTTP_Request2_Exception $e) {
	  echo 'Error: ' . $e->getMessage();
	}

	// Mobile Money

	require_once 'HTTP/Request2.php';
	$request = new HTTP_Request2();
	$request->setUrl('https://preproduction-gateway.bizao.com/mobilemoney/v1');
	$request->setMethod(HTTP_Request2::METHOD_POST);
	$request->setConfig(array(
	  'follow_redirects' => TRUE
	));
	$request->setHeader(array(
	  'Accept' => 'application/js',
	  'Authorization' => 'Bearer 47fae1af-d688-3f82-92f0-76ee0746bb71',
	  'Content-Type' => 'application/json',
	  'cache-control' => 'no-cache',
	  'channel' => 'web',
	  'country-code' => 'sn',
	  'lang' => 'fr',
	  'mno-name' => 'orange',
	  'Cookie' => 'SERVERID=s0; c5650de4be5f93e33e7603692c175697=d21094e84488e36dacab1b6fc53f663a'
	));
	$request->setBody('{\n\n"currency": "XOF",\n\n"order_id": "skdjdbhgfccdx",\n\n"amount": 10,\n\n"state":"MyState-abbcb6c66",\n\n"reference": "ACBPNV",\n\n"return_url": "https://callback.bizao.com/SUBITO/redirect.php",\n\n"cancel_url": "https://callback.bizao.com/SUBITO/redirect.php"\n\n}\n');
	try {
	  $response = $request->send();
	  if ($response->getStatus() == 200) {
	    echo $response->getBody();
	  }
	  else {
	    echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
	    $response->getReasonPhrase();
	  }
	}
	catch(HTTP_Request2_Exception $e) {
	  echo 'Error: ' . $e->getMessage();
	}

?>