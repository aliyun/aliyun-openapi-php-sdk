<?php

namespace pvtz\Request\V20180101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BindZoneVpc
 *
 * @method string getUserClientIp()
 * @method string getZoneId()
 * @method string getLang()
 * @method array getVpcss()
 */
class BindZoneVpcRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'pvtz',
            '2018-01-01',
            'BindZoneVpc',
            'pvtz'
        );
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param array $vpcs
     *
     * @return $this
     */
	public function setVpcss(array $vpcs)
	{
	    $this->requestParameters['Vpcss'] = $vpcs;
		foreach ($vpcs as $depth1 => $depth1Value) {
			$this->queryParameters['Vpcs.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
			$this->queryParameters['Vpcs.' . ($depth1 + 1) . '.VpcId'] = $depth1Value['VpcId'];
		}

		return $this;
    }
}
