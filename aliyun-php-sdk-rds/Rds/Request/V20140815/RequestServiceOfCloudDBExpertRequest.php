<?php

namespace Rds\Request\V20140815;

/**
 * Request of RequestServiceOfCloudDBExpert
 *
 * @method string getServiceRequestParam()
 * @method string getDBInstanceId()
 * @method string getServiceRequestType()
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
}
