<?php
public class PHP_Bitcoin{

	function curl_get_contents($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
	function round_up ( $value, $precision ) 
	{ 
		$pow = pow ( 10, $precision ); 
		return ( ceil ( $pow * $value ) + ceil ( $pow * $value - ceil ( $pow * $value ) ) ) / $pow;
	}
	function inBitcoin($currency, $amountInCurrency, $exactChoice = 0)
	{
		$urls = "https://blockchain.info/tobtc?currency=".$currency."&value=".$amountInCurrency;
		$btc_amount = curl_get_contents($urls);
		if($exactChoice != 1){
			$btc_amount = round_up($btc_amount, 3);
		}
		return $btc_amount;
	}
	function recieveBitcoin($recieve_address, $callback_url = '')
	{
		$blockchain_api = "https://blockchain.info/api/receive?method=create&cors=true&format=plain&address=".$recieve_address."&shared=false&callback=".$callback_url;
		$response = curl_get_contents($blockchain_api);
		$decoded = json_decode($recieve_api);
		$btc_address = $decoded->input_address;
		return $btc_address;
	}
}
?>
