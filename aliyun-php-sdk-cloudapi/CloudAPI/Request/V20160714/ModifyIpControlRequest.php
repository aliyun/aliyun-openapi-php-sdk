<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of ModifyIpControl
 *
 * @method string getIpControlId()
 * @method string getSecurityToken()
 * @method string getIpControlName()
 * @method string getDescription()
 */
class ModifyIpControlRequest extends \RpcAcsRequest
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
            'ModifyIpControl',
            'apigateway'
        );
    }

    /**
     * @param string $ipControlId
     *
     * @return $this
     */
    public function setIpControlId($ipControlId)
    {
        $this->requestParameters['IpControlId'] = $ipControlId;
        $this->queryParameters['IpControlId'] = $ipControlId;

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
