<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddCustomLine
 *
 * @method string getDomainName()
 * @method array getIpSegments()
 * @method string getUserClientIp()
 * @method string getLineName()
 * @method string getLang()
 */
class AddCustomLineRequest extends \RpcAcsRequest
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
            'AddCustomLine',
            'alidns'
        );
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param array $ipSegment
     *
     * @return $this
     */
	public function setIpSegments(array $ipSegment)
	{
	    $this->requestParameters['IpSegments'] = $ipSegment;
		foreach ($ipSegment as $depth1 => $depth1Value) {
			$this->queryParameters['IpSegment.' . ($depth1 + 1) . '.EndIp'] = $depth1Value['EndIp'];
			$this->queryParameters['IpSegment.' . ($depth1 + 1) . '.StartIp'] = $depth1Value['StartIp'];
		}

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
     * @param string $lineName
     *
     * @return $this
     */
    public function setLineName($lineName)
    {
        $this->requestParameters['LineName'] = $lineName;
        $this->queryParameters['LineName'] = $lineName;

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
}
