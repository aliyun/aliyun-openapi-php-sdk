<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateVoiceAppraise
 *
 * @method string getIsAppraise()
 * @method string getContent()
 * @method string getInstanceId()
 * @method string getContactFlowVersionId()
 */
class CreateVoiceAppraiseRequest extends \RpcAcsRequest
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
            'CreateVoiceAppraise'
        );
    }

    /**
     * @param string $isAppraise
     *
     * @return $this
     */
    public function setIsAppraise($isAppraise)
    {
        $this->requestParameters['IsAppraise'] = $isAppraise;
        $this->queryParameters['IsAppraise'] = $isAppraise;

        return $this;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->requestParameters['Content'] = $content;
        $this->queryParameters['Content'] = $content;

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
}
