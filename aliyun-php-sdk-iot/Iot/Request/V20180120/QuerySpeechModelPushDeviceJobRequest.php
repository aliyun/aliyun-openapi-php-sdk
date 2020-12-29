<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QuerySpeechModelPushDeviceJob
 *
 * @method string getPageId()
 * @method string getPageSize()
 * @method string getApiProduct()
 * @method string getJobCode()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method string getStatus()
 */
class QuerySpeechModelPushDeviceJobRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'QuerySpeechModelPushDeviceJob',
            'iot'
        );
    }

    /**
     * @param string $pageId
     *
     * @return $this
     */
    public function setPageId($pageId)
    {
        $this->requestParameters['PageId'] = $pageId;
        $this->queryParameters['PageId'] = $pageId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $jobCode
     *
     * @return $this
     */
    public function setJobCode($jobCode)
    {
        $this->requestParameters['JobCode'] = $jobCode;
        $this->queryParameters['JobCode'] = $jobCode;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->requestParameters['DeviceName'] = $deviceName;
        $this->queryParameters['DeviceName'] = $deviceName;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
