<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RequestServiceOfCloudDBExpert
 *
 * @method string getServiceRequestType()
 * @method string getServiceRequestParam()
 * @method string getDBInstanceId()
 */
class RequestServiceOfCloudDBExpertRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'RequestServiceOfCloudDBExpert',
            'rds'
        );
    }

    /**
     * @param string $serviceRequestType
     *
     * @return $this
     */
    public function setServiceRequestType($serviceRequestType)
    {
        $this->requestParameters['ServiceRequestType'] = $serviceRequestType;
        $this->queryParameters['ServiceRequestType'] = $serviceRequestType;

        return $this;
    }

    /**
     * @param string $serviceRequestParam
     *
     * @return $this
     */
    public function setServiceRequestParam($serviceRequestParam)
    {
        $this->requestParameters['ServiceRequestParam'] = $serviceRequestParam;
        $this->queryParameters['ServiceRequestParam'] = $serviceRequestParam;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

        return $this;
    }
}
