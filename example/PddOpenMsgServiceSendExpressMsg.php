<?php
/**
 * 示例接口名称：pdd.open.msg.service.send.express.msg
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use Com\Pdd\Pop\Sdk\PopHttpClient;
use Com\Pdd\Pop\Sdk\Api\Request\PddOpenMsgServiceSendExpressMsgRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddOpenMsgServiceSendExpressMsgRequest();

$request->setSignName('str');
$request->setTemplateCode(1);
$request->setTemplateParamJson();
$request->setWaybillCodes(array('str'));
$request->setWpCode('str');
$request->setOutId('str');
try{
	$response = $client->syncInvoke($request);
} catch(Com\Pdd\Pop\Sdk\PopHttpException $e){
	echo $e->getMessage();
	exit;
}
$content = $response->getContent();
if(isset($content['error_response'])){
	echo "异常返回";
}
echo json_encode($content,JSON_UNESCAPED_UNICODE);