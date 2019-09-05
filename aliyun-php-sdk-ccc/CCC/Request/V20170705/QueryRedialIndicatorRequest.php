<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryRedialIndicator
 *
 * @method string getContactId()
 * @method string getMockResponse()
 * @method string getInstanceId()
 */
class QueryRedialIndicatorRequest extends \RpcAcsRequest
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
            'QueryRedialIndicator'
        );
    }

    /**
     * @param string $contactId
     *
     * @return $this
     */
    public function setContactId($contactId)
    {
        $this->requestParameters['ContactId'] = $contactId;
        $this->queryParameters['ContactId'] = $contactId;

        return $this;
    }

    /**
     * @param string $mockResponse
     *
     * @return $this
     */
    public function setMockResponse($mockResponse)
    {
        $this->requestParameters['MockResponse'] = $mockResponse;
        $this->queryParameters['MockResponse'] = $mockResponse;

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
}
