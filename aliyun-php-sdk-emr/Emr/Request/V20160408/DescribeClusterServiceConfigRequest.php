<?php

namespace Emr\Request\V20160408;

/**
 * Request of DescribeClusterServiceConfig
 *
 * @method string getResourceOwnerId()
 * @method string getHostInstanceId()
 * @method string getTagValue()
 * @method string getGroupId()
 * @method string getServiceName()
 * @method string getClusterId()
 * @method string getConfigVersion()
 */
class DescribeClusterServiceConfigRequest extends \RpcAcsRequest
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
            'DescribeClusterServiceConfig',
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
     * @param string $hostInstanceId
     *
     * @return $this
     */
    public function setHostInstanceId($hostInstanceId)
    {
        $this->requestParameters['HostInstanceId'] = $hostInstanceId;
        $this->queryParameters['HostInstanceId'] = $hostInstanceId;

        return $this;
    }

    /**
     * @param string $tagValue
     *
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        $this->requestParameters['TagValue'] = $tagValue;
        $this->queryParameters['TagValue'] = $tagValue;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->requestParameters['ServiceName'] = $serviceName;
        $this->queryParameters['ServiceName'] = $serviceName;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $configVersion
     *
     * @return $this
     */
    public function setConfigVersion($configVersion)
    {
        $this->requestParameters['ConfigVersion'] = $configVersion;
        $this->queryParameters['ConfigVersion'] = $configVersion;

        return $this;
    }
}
