<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateJob
 *
 * @method string getJobDocument()
 * @method string getDescription()
 * @method string getType()
 * @method string getRolloutConfig()
 * @method string getIotInstanceId()
 * @method string getJobName()
 * @method string getTimeoutConfig()
 * @method string getTargetConfig()
 * @method string getJobFile()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateJobRequest extends \RpcAcsRequest
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
            'CreateJob',
            'iot'
        );
    }

    /**
     * @param string $jobDocument
     *
     * @return $this
     */
    public function setJobDocument($jobDocument)
    {
        $this->requestParameters['JobDocument'] = $jobDocument;
        $this->queryParameters['JobDocument'] = $jobDocument;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $rolloutConfig
     *
     * @return $this
     */
    public function setRolloutConfig($rolloutConfig)
    {
        $this->requestParameters['RolloutConfig'] = $rolloutConfig;
        $this->queryParameters['RolloutConfig'] = $rolloutConfig;

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $jobName
     *
     * @return $this
     */
    public function setJobName($jobName)
    {
        $this->requestParameters['JobName'] = $jobName;
        $this->queryParameters['JobName'] = $jobName;

        return $this;
    }

    /**
     * @param string $timeoutConfig
     *
     * @return $this
     */
    public function setTimeoutConfig($timeoutConfig)
    {
        $this->requestParameters['TimeoutConfig'] = $timeoutConfig;
        $this->queryParameters['TimeoutConfig'] = $timeoutConfig;

        return $this;
    }

    /**
     * @param string $targetConfig
     *
     * @return $this
     */
    public function setTargetConfig($targetConfig)
    {
        $this->requestParameters['TargetConfig'] = $targetConfig;
        $this->queryParameters['TargetConfig'] = $targetConfig;

        return $this;
    }

    /**
     * @param string $jobFile
     *
     * @return $this
     */
    public function setJobFile($jobFile)
    {
        $this->requestParameters['JobFile'] = $jobFile;
        $this->queryParameters['JobFile'] = $jobFile;

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
}
