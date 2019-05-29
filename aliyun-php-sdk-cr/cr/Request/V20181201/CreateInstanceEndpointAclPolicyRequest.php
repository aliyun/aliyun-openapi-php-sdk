<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateInstanceEndpointAclPolicy
 *
 * @method string getEntry()
 * @method string getInstanceId()
 * @method string getEndpointType()
 * @method string getComment()
 */
class CreateInstanceEndpointAclPolicyRequest extends \RpcAcsRequest
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
            'cr',
            '2018-12-01',
            'CreateInstanceEndpointAclPolicy',
            'cr'
        );
    }

    /**
     * @param string $entry
     *
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->requestParameters['Entry'] = $entry;
        $this->queryParameters['Entry'] = $entry;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $endpointType
     *
     * @return $this
     */
    public function setEndpointType($endpointType)
    {
        $this->requestParameters['EndpointType'] = $endpointType;
        $this->queryParameters['EndpointType'] = $endpointType;

        return $this;
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->requestParameters['Comment'] = $comment;
        $this->queryParameters['Comment'] = $comment;

        return $this;
    }
}
