<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of DescribeApiStage
 *
 * @method string getSecurityToken()
 * @method string getGroupId()
 * @method string getStageId()
 */
class DescribeApiStageRequest extends \RpcAcsRequest
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
            'DescribeApiStage',
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
     * @param string $stageId
     *
     * @return $this
     */
    public function setStageId($stageId)
    {
        $this->requestParameters['StageId'] = $stageId;
        $this->queryParameters['StageId'] = $stageId;

        return $this;
    }
}
