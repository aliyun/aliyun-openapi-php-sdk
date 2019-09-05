<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RemovePhoneNumber
 *
 * @method string getInstanceId()
 * @method string getPhoneNumberId()
 */
class RemovePhoneNumberRequest extends \RpcAcsRequest
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
            'RemovePhoneNumber'
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
     * @param string $phoneNumberId
     *
     * @return $this
     */
    public function setPhoneNumberId($phoneNumberId)
    {
        $this->requestParameters['PhoneNumberId'] = $phoneNumberId;
        $this->queryParameters['PhoneNumberId'] = $phoneNumberId;

        return $this;
    }
}
