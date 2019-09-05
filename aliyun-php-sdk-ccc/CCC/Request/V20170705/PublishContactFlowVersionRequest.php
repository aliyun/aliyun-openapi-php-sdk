<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PublishContactFlowVersion
 *
 * @method string getInstanceId()
 * @method string getContactFlowVersionId()
 * @method string getUseTianGong()
 */
class PublishContactFlowVersionRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'PublishContactFlowVersion'
        );
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
     * @param string $contactFlowVersionId
     *
     * @return $this
     */
    public function setContactFlowVersionId($contactFlowVersionId)
    {
        $this->requestParameters['ContactFlowVersionId'] = $contactFlowVersionId;
        $this->queryParameters['ContactFlowVersionId'] = $contactFlowVersionId;

        return $this;
    }

    /**
     * @param string $useTianGong
     *
     * @return $this
     */
    public function setUseTianGong($useTianGong)
    {
        $this->requestParameters['UseTianGong'] = $useTianGong;
        $this->queryParameters['UseTianGong'] = $useTianGong;

        return $this;
    }
}
