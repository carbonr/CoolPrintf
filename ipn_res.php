<?
/**************************************************************************************************
| Fiverr Script
| http://www.fiverrscript.com
| webmaster@fiverrscript.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| Agreement available at http://www.fiverrscript.com/eula.html and to be bound by it.
|
| Copyright (c) 2011 FiverrScript.com. All rights reserved.
|**************************************************************************************************/
include("include/config.php");
$host = $DBHOST;
$ln = $DBUSER;
$pw = $DBPASSWORD;
$db = $DBNAME;
$paypal_email = $config['paypal_email'];
$error_email = $config['notify_email'];
$site_email = $config['site_email'];
$site_name = $config['site_name'];
$em_headers  = "From: ".$site_name." <".$site_email.">\n";		
$em_headers .= "Reply-To: ".$site_email."\n";
$em_headers .= "Return-Path: ".$site_email."\n";
$em_headers .= "Organization: ".$site_name."\n";
$em_headers .= "X-Priority: 3\n";

require($config['basedir']."/include/functions/ipn_cls.php");

$paypal_info = $HTTP_POST_VARS;
$paypal_ipn = new paypal_ipn($paypal_info);

foreach ($paypal_ipn->paypal_post_vars as $key=>$value) {
	if (getType($key)=="string") {
		eval("\$$key=\$value;");
	}
}

$paypal_ipn->send_response();
$paypal_ipn->error_email = $error_email;

if (!$paypal_ipn->is_verified()) {
	$paypal_ipn->error_out("Bad order (PayPal says it's invalid)" . $paypal_ipn->paypal_response , $em_headers);
	die();
}


switch( $paypal_ipn->get_payment_status() )
{
	case 'Pending':
		
		$pending_reason=$paypal_ipn->paypal_post_vars['pending_reason'];
					
		if ($pending_reason!="intl") {
			$paypal_ipn->error_out("Pending Payment - $pending_reason", $em_headers);
			break;
		}


	case 'Completed':
		
		$user_id = $custom;
		$PID = $item_number;
		$currency = $config['currency'];
		
		$query = "select price from posts where PID='".mysql_real_escape_string($PID)."'"; 
		$executequery=$conn->execute($query);
		$price = $executequery->fields['price'];
		if($price == "")
		{
			$price = $config['price'];
		}
		
		$gross = $price;
	
		if ($paypal_ipn->paypal_post_vars['txn_type']=="reversal") 
		{
			$reason_code=$paypal_ipn->paypal_post_vars['reason_code'];
			$paypal_ipn->error_out("PayPal reversed an earlier transaction.", $em_headers);
			if($user_id > 0 && $PID > 0)
			{
				$query = "UPDATE orders SET status='7' WHERE USERID='".mysql_real_escape_string($user_id)."' AND PID='".mysql_real_escape_string($PID)."'"; 
				$executequery=$conn->execute($query);
			}
		}
		else 
		{
					
			if (
				(strtolower(trim($paypal_ipn->paypal_post_vars['business'])) == $paypal_email) && (trim($mc_currency)==$currency) && (trim($mc_gross)-$tax == $quantity*$gross) 
				) {

				$qry="INSERT INTO paypal_table VALUES (0 , '$payer_id', '$payment_date', '$txn_id', '$first_name', '$last_name', '$payer_email', '$payer_status', '$payment_type', '$memo', '$item_name', '$item_number', $quantity, $mc_gross, '$mc_currency', '$address_name', '".nl2br($address_street)."', '$address_city', '$address_state', '$address_zip', '$address_country', '$address_status', '$payer_business_name', '$payment_status', '$pending_reason', '$reason_code', '$txn_type')";
				
				
				if (mysql_query($qry)) 
				{
					$transid = mysql_insert_id(); 
					$paypal_ipn->error_out("This was a successful transaction", $em_headers);			
					if($user_id > 0)
					{
						$query = "INSERT INTO orders SET USERID='".mysql_real_escape_string($user_id)."', PID='".mysql_real_escape_string($PID)."', time_added='".time()."', status='0', price='".mysql_real_escape_string($gross)."'"; 
						$executequery=$conn->execute($query);
						$order_id = mysql_insert_id();
						if($order_id > 0)
						{
							$query = "INSERT INTO payments SET USERID='".mysql_real_escape_string($user_id)."', OID='".mysql_real_escape_string($order_id)."', time='".time()."', price='".mysql_real_escape_string($gross)."', t='1', PAYPAL='".mysql_real_escape_string($transid)."'"; 
							$executequery=$conn->execute($query);
							
							$query = "UPDATE posts SET rev=rev+$gross WHERE PID='".mysql_real_escape_string($PID)."'"; 
							$executequery=$conn->execute($query);
						}
					}

				} 
				else 
				{
					$paypal_ipn->error_out("This was a duplicate transaction", $em_headers);
				} 
			} 
			else 
			{
				$paypal_ipn->error_out("Someone attempted a sale using a manipulated URL", $em_headers);
			}
		}
		break;
		
	case 'Failed':
		// this will only happen in case of echeck.
		$paypal_ipn->error_out("Failed Payment", $em_headers);
	break;

	case 'Denied':
		// denied payment by us
		$paypal_ipn->error_out("Denied Payment", $em_headers);
	break;

	case 'Refunded':
		// payment refunded by us
		$paypal_ipn->error_out("Refunded Payment", $em_headers);
	break;

	case 'Canceled':
		// reversal cancelled
		// mark the payment as dispute cancelled		
		$paypal_ipn->error_out("Cancelled reversal", $em_headers);
	break;

	default:
		// order is not good
		$paypal_ipn->error_out("Unknown Payment Status - " . $paypal_ipn->get_payment_status(), $em_headers);
	break;

} 

?>