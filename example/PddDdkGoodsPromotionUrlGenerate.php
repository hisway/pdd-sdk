<?php
/**
 * 示例接口名称：pdd.ddk.goods.promotion.url.generate
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use Com\Pdd\Pop\Sdk\PopHttpClient;
use Com\Pdd\Pop\Sdk\Api\Request\PddDdkGoodsPromotionUrlGenerateRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddDdkGoodsPromotionUrlGenerateRequest();

$request->setPId('str');
$request->setGoodsIdList(array(1));
$request->setGenerateShortUrl(true);
$request->setMultiGroup(true);
$request->setCustomParameters('str');
$request->setGenerateWeappWebview(true);
$request->setZsDuoId(1);
$request->setGenerateWeApp(true);
$request->setGenerateWeiboappWebview(true);
$request->setGenerateMallCollectCoupon(true);
$request->setGenerateSchemaUrl(true);
$request->setGenerateQqApp(true);
$request->setSearchId('str');
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