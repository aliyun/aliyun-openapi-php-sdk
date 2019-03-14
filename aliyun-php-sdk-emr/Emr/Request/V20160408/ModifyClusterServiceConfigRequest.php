<?php

namespace Emr\Request\V20160408;

/**
 * Request of ModifyClusterServiceConfig
 *
 * @method string getResourceOwnerId()
 * @method string getCustomConfigParams()
 * @method string getConfigType()
 * @method string getHostInstanceId()
 * @method string getGroupId()
 * @method string getServiceName()
 * @method string getComment()
 * @method string getClusterId()
 * @method string getConfigParams()
 */
class ModifyClusterServiceConfigRequest extends \RpcAcsRequest
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
            'ModifyClusterServiceConfig',
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
     * @param string $customConfigParams
     *
     * @return $this
     */
    public function setCustomConfigParams($customConfigParams)
    {
        $this->requestParameters['CustomConfigParams'] = $customConfigParams;
        $this->queryParameters['CustomConfigParams'] = $customConfigParams;

        return $this;
    }

    /**
     * @param string $configType
     *
     * @return $this
     */
    public function setConfigType($configType)
    {
        $this->requestParameters['ConfigType'] = $configType;
        $this->queryParameters['ConfigType'] = $configType;

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
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->requestParameters['Comment'] = $comment;
        $this->queryParameters['Comment'] = $comment;

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
     * @param string $configParams
     *
     * @return $this
     */
    public function setConfigParams($configParams)
    {
        $this->requestParameters['ConfigParams'] = $configParams;
        $this->queryParameters['ConfigParams'] = $configParams;

        return $this;
    }
}
