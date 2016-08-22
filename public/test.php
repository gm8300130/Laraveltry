<?php
require_once ('XingeApp.php');
//给单个设备下发通知
// var_dump(XingeApp::PushTokenAndroid(2100209145, "c9776577e049b14b645d05043c5bf605", "", "ZZZZZZZZZZZ", "806aa3a62d6387bc4b33b7e9b9abd3e0edc227da"));
var_dump(DemoPushDeviceListMultipleNotification());

function DemoPushDeviceListMultipleNotification()
{
	$push = new XingeApp(2100209145, 'c9776577e049b14b645d05043c5bf605');
	$mess = new Message();
	$mess->setExpireTime(86400);
	$mess->setTitle('哈哈哈哈哈阿');
	$mess->setContent('哇哇哇哇嗚哇阿挖');
	$mess->setType(Message::TYPE_NOTIFICATION);
	$ret = $push->CreateMultipush($mess, XingeApp::IOSENV_DEV);
	if (!($ret['ret_code'] === 0))
		return $ret;
	else
	{
		$result=array();
		$deviceList1 = array('806aa3a62d6387bc4b33b7e9b9abd3e0edc227da');
		array_push($result, $push->PushDeviceListMultiple($ret['result']['push_id'], $deviceList1));
		// $deviceList2 = array('token4', 'token5', 'token6');
		// array_push($result, $push->PushDeviceListMultiple($ret['result']['push_id'], $deviceList2));
		return ($result);
	}
}
?>