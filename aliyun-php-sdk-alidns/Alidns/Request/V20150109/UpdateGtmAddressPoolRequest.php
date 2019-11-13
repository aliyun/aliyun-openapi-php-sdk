<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateGtmAddressPool
 *
 * @method string getType()
 * @method string getMinAvailableAddrNum()
 * @method string getAddrPoolId()
 * @method string getUserClientIp()
 * @method string getName()
 * @method string getLang()
 * @method array getAddrs()
 */
class UpdateGtmAddressPoolRequest extends \RpcAcsRequest
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
            'Alidns',
            '2015-01-09',
            'UpdateGtmAddressPool',
            'alidns'
        );
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $minAvailableAddrNum
     *
     * @return $this
     */
    public function setMinAvailableAddrNum($minAvailableAddrNum)
    {
        $this->requestParameters['MinAvailableAddrNum'] = $minAvailableAddrNum;
        $this->queryParameters['MinAvailableAddrNum'] = $minAvailableAddrNum;

        return $this;
    }

    /**
     * @param string $addrPoolId
     *
     * @return $this
     */
    public function setAddrPoolId($addrPoolId)
    {
        $this->requestParameters['AddrPoolId'] = $addrPoolId;
        $this->queryParameters['AddrPoolId'] = $addrPoolId;

        return $this;
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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

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
     * @param array $addr
     *
     * @return $this
     */
	public function setAddrs(array $addr)
	{
	    $this->requestParameters['Addrs'] = $addr;
		foreach ($addr as $depth1 => $depth1Value) {
			$this->queryParameters['Addr.' . ($depth1 + 1) . '.Mode'] = $depth1Value['Mode'];
			$this->queryParameters['Addr.' . ($depth1 + 1) . '.LbaWeight'] = $depth1Value['LbaWeight'];
			$this->queryParameters['Addr.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
		}

		return $this;
    }
}
