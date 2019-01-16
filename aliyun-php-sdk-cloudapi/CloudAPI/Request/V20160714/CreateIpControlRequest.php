<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of CreateIpControl
 *
 * @method string getSecurityToken()
 * @method string getIpControlName()
 * @method string getIpControlType()
 * @method array getIpControlPolicyss()
 * @method string getDescription()
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

    /**
     * @param array $ipControlPolicyss
     *
     * @return $this
     */
    public function setIpControlPolicyss(array $ipControlPolicyss)
    {
        $this->requestParameters['IpControlPolicyss'] = $ipControlPolicyss;
        foreach ($ipControlPolicyss as $i => $iValue) {
            $this->queryParameters['IpControlPolicys.' . ($i + 1) . '.AppId'] = $ipControlPolicyss[$i]['AppId'];
            $this->queryParameters['IpControlPolicys.' . ($i + 1) . '.CidrIp'] = $ipControlPolicyss[$i]['CidrIp'];
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
}
