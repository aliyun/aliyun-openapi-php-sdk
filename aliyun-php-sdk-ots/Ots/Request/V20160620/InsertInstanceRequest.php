<?php

namespace Ots\Request\V20160620;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InsertInstance
 *
 * @method string getaccess_key_id()
 * @method string getClusterType()
 * @method string getResourceOwnerId()
 * @method string getInstanceName()
 * @method string getDescription()
 * @method array getTagInfos()
 * @method string getNetwork()
 */
class InsertInstanceRequest extends \RpcAcsRequest
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
            'Ots',
            '2016-06-20',
            'InsertInstance',
            'ots'
        );
    }

    /**
     * @param string $access_key_id
     *
     * @return $this
     */
    public function setaccess_key_id($access_key_id)
    {
        $this->requestParameters['access_key_id'] = $access_key_id;
        $this->queryParameters['access_key_id'] = $access_key_id;

        return $this;
    }

    /**
     * @param string $clusterType
     *
     * @return $this
     */
    public function setClusterType($clusterType)
    {
        $this->requestParameters['ClusterType'] = $clusterType;
        $this->queryParameters['ClusterType'] = $clusterType;

        return $this;
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
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->requestParameters['InstanceName'] = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;

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
     * @param array $value
     *
     * @return $this
     */
    public function setTagInfos(array $value)
    {
        $this->requestParameters['TagInfos'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['TagInfo.' . ($i + 1) . '.TagValue'] = $value[$i]['TagValue'];
            $this->queryParameters['TagInfo.' . ($i + 1) . '.TagKey'] = $value[$i]['TagKey'];
        }

        return $this;
    }

    /**
     * @param string $network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->requestParameters['Network'] = $network;
        $this->queryParameters['Network'] = $network;

        return $this;
    }
}
