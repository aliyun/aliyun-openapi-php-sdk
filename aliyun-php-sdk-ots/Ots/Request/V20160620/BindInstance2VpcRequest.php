<?php

namespace Ots\Request\V20160620;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BindInstance2Vpc
 *
 * @method string getaccess_key_id()
 * @method string getInstanceVpcName()
 * @method string getResourceOwnerId()
 * @method string getInstanceName()
 * @method string getVpcId()
 * @method string getVirtualSwitchId()
 * @method string getRegionNo()
 * @method string getNetwork()
 */
class BindInstance2VpcRequest extends \RpcAcsRequest
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
            'BindInstance2Vpc',
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
     * @param string $instanceVpcName
     *
     * @return $this
     */
    public function setInstanceVpcName($instanceVpcName)
    {
        $this->requestParameters['InstanceVpcName'] = $instanceVpcName;
        $this->queryParameters['InstanceVpcName'] = $instanceVpcName;

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
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        $this->requestParameters['VpcId'] = $vpcId;
        $this->queryParameters['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @param string $virtualSwitchId
     *
     * @return $this
     */
    public function setVirtualSwitchId($virtualSwitchId)
    {
        $this->requestParameters['VirtualSwitchId'] = $virtualSwitchId;
        $this->queryParameters['VirtualSwitchId'] = $virtualSwitchId;

        return $this;
    }

    /**
     * @param string $regionNo
     *
     * @return $this
     */
    public function setRegionNo($regionNo)
    {
        $this->requestParameters['RegionNo'] = $regionNo;
        $this->queryParameters['RegionNo'] = $regionNo;

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
