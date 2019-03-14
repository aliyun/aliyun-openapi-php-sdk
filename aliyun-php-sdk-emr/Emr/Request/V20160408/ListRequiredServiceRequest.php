<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListRequiredService
 *
 * @method string getResourceOwnerId()
 * @method string getEmrVersion()
 * @method string getServiceNameList()
 */
class ListRequiredServiceRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'ListRequiredService',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $emrVersion
     *
     * @return $this
     */
    public function setEmrVersion($emrVersion)
    {
        $this->requestParameters['EmrVersion'] = $emrVersion;
        $this->queryParameters['EmrVersion'] = $emrVersion;

        return $this;
    }

    /**
     * @param string $serviceNameList
     *
     * @return $this
     */
    public function setServiceNameList($serviceNameList)
    {
        $this->requestParameters['ServiceNameList'] = $serviceNameList;
        $this->queryParameters['ServiceNameList'] = $serviceNameList;

        return $this;
    }
}
