<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateIpControl
 *
 * @method string getIpControlName()
 * @method array getIpControlPolicyss()
 * @method string getDescription()
 * @method string getSecurityToken()
 * @method string getIpControlType()
 */
class CreateIpControlRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'CreateIpControl',
            'apigateway'
        );
    }

    /**
     * @param string $ipControlName
     *
     * @return $this
     */
    public function setIpControlName($ipControlName)
    {
        $this->requestParameters['IpControlName'] = $ipControlName;
        $this->queryParameters['IpControlName'] = $ipControlName;

        return $this;
    }

    /**
     * @param array $ipControlPolicys
     *
     * @return $this
     */
	public function setIpControlPolicyss(array $ipControlPolicys)
	{
	    $this->requestParameters['IpControlPolicyss'] = $ipControlPolicys;
		foreach ($ipControlPolicys as $depth1 => $depth1Value) {
			$this->queryParameters['IpControlPolicys.' . ($depth1 + 1) . '.AppId'] = $depth1Value['AppId'];
			$this->queryParameters['IpControlPolicys.' . ($depth1 + 1) . '.CidrIp'] = $depth1Value['CidrIp'];
		}

		return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $ipControlType
     *
     * @return $this
     */
    public function setIpControlType($ipControlType)
    {
        $this->requestParameters['IpControlType'] = $ipControlType;
        $this->queryParameters['IpControlType'] = $ipControlType;

        return $this;
    }
}
