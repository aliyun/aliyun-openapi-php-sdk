<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of SetDomainWebSocketStatus
 *
 * @method string getSecurityToken()
 * @method string getGroupId()
 * @method string getDomainName()
 * @method string getActionValue()
 */
class SetDomainWebSocketStatusRequest extends \RpcAcsRequest
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
            'SetDomainWebSocketStatus',
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
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
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
     * @param string $actionValue
     *
     * @return $this
     */
    public function setActionValue($actionValue)
    {
        $this->requestParameters['ActionValue'] = $actionValue;
        $this->queryParameters['ActionValue'] = $actionValue;

        return $this;
    }
}
