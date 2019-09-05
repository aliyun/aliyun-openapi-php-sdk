<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SendPredefinedShortMessage
 *
 * @method string getPhoneNumbers()
 * @method string getInstanceId()
 * @method string getConfigId()
 * @method string getTemplateParam()
 */
class SendPredefinedShortMessageRequest extends \RpcAcsRequest
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
            'SendPredefinedShortMessage'
        );
    }

    /**
     * @param string $phoneNumbers
     *
     * @return $this
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->requestParameters['PhoneNumbers'] = $phoneNumbers;
        $this->queryParameters['PhoneNumbers'] = $phoneNumbers;

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
     * @param string $configId
     *
     * @return $this
     */
    public function setConfigId($configId)
    {
        $this->requestParameters['ConfigId'] = $configId;
        $this->queryParameters['ConfigId'] = $configId;

        return $this;
    }

    /**
     * @param string $templateParam
     *
     * @return $this
     */
    public function setTemplateParam($templateParam)
    {
        $this->requestParameters['TemplateParam'] = $templateParam;
        $this->queryParameters['TemplateParam'] = $templateParam;

        return $this;
    }
}
