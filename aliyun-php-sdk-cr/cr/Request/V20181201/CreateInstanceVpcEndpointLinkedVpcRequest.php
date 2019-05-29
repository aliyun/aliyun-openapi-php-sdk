<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateInstanceVpcEndpointLinkedVpc
 *
 * @method string getVswitchId()
 * @method string getInstanceId()
 * @method string getVpcId()
 */
class CreateInstanceVpcEndpointLinkedVpcRequest extends \RpcAcsRequest
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
            'cr',
            '2018-12-01',
            'CreateInstanceVpcEndpointLinkedVpc',
            'cr'
        );
    }

    /**
     * @param string $vswitchId
     *
     * @return $this
     */
    public function setVswitchId($vswitchId)
    {
        $this->requestParameters['VswitchId'] = $vswitchId;
        $this->queryParameters['VswitchId'] = $vswitchId;

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
}
