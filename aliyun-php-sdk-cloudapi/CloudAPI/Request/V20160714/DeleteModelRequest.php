<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of DeleteModel
 *
 * @method string getSecurityToken()
 * @method string getModelName()
 * @method string getGroupId()
 */
class DeleteModelRequest extends \RpcAcsRequest
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
            'DeleteModel',
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
     * @param string $modelName
     *
     * @return $this
     */
    public function setModelName($modelName)
    {
        $this->requestParameters['ModelName'] = $modelName;
        $this->queryParameters['ModelName'] = $modelName;

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
}
