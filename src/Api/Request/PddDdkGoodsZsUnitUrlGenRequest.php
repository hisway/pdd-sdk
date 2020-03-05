<?php
namespace Com\Pdd\Pop\Sdk\Api\Request;

use Com\Pdd\Pop\Sdk\PopBaseHttpRequest;
use Com\Pdd\Pop\Sdk\PopBaseJsonEntity;

class PddDdkGoodsZsUnitUrlGenRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "source_url")
	*/
	private $sourceUrl;

	/**
	* @JsonProperty(String, "pid")
	*/
	private $pid;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "source_url", $this->sourceUrl);
		$this->setUserParam($params, "pid", $this->pid);

	}

	public function getVersion()
	{
		return "V1";
	}

	public function getDataType()
	{
		return "JSON";
	}

	public function getType()
	{
		return "pdd.ddk.goods.zs.unit.url.gen";
	}

	public function setSourceUrl($sourceUrl)
	{
		$this->sourceUrl = $sourceUrl;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
	}

}
