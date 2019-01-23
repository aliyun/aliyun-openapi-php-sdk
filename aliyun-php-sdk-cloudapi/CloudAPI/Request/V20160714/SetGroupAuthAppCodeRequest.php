<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of SetGroupAuthAppCode
 *
 * @method string getSecurityToken()
 * @method string getGroupId()
 * @method string getAuthAppCode()
 */
class SetGroupAuthAppCodeRequest extends \RpcAcsRequest
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
            'SetGroupAuthAppCode',
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
     * @param string $authAppCode
     *
     * @return $this
     */
    public function setAuthAppCode($authAppCode)
    {
        $this->requestParameters['AuthAppCode'] = $authAppCode;
        $this->queryParameters['AuthAppCode'] = $authAppCode;

        return $this;
    }
}
