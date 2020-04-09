<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateCluster
 *
 * @method string getBusinessCode()
 * @method string getCreateWithLogIntegration()
 * @method array getVswitchidss()
 * @method string getCloudMonitorFlags()
 * @method string getClusterEnvType()
 * @method string getCreateWithArmsIntegration()
 * @method string getKeyPair()
 * @method string getClusterTitle()
 * @method string getPodCIDR()
 * @method string getClusterId()
 * @method string getClusterType()
 * @method string getPassword()
 * @method string getSnatEntry()
 * @method string getNetPlug()
 * @method string getVpcId()
 * @method string getRegionName()
 * @method string getPrivateZone()
 * @method string getServiceCIDR()
 * @method string getPublicSlb()
 */
class CreateClusterRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'CreateCluster',
            'retailcloud'
        );
    }

    /**
     * @param string $businessCode
     *
     * @return $this
     */
    public function setBusinessCode($businessCode)
    {
        $this->requestParameters['BusinessCode'] = $businessCode;
        $this->queryParameters['BusinessCode'] = $businessCode;

        return $this;
    }

    /**
     * @param string $createWithLogIntegration
     *
     * @return $this
     */
    public function setCreateWithLogIntegration($createWithLogIntegration)
    {
        $this->requestParameters['CreateWithLogIntegration'] = $createWithLogIntegration;
        $this->queryParameters['CreateWithLogIntegration'] = $createWithLogIntegration;

        return $this;
    }

    /**
     * @param array $vswitchids
     *
     * @return $this
     */
	public function setVswitchidss(array $vswitchids)
	{
	    $this->requestParameters['Vswitchidss'] = $vswitchids;
		foreach ($vswitchids as $i => $iValue) {
			$this->queryParameters['Vswitchids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $cloudMonitorFlags
     *
     * @return $this
     */
    public function setCloudMonitorFlags($cloudMonitorFlags)
    {
        $this->requestParameters['CloudMonitorFlags'] = $cloudMonitorFlags;
        $this->queryParameters['CloudMonitorFlags'] = $cloudMonitorFlags;

        return $this;
    }

    /**
     * @param string $clusterEnvType
     *
     * @return $this
     */
    public function setClusterEnvType($clusterEnvType)
    {
        $this->requestParameters['ClusterEnvType'] = $clusterEnvType;
        $this->queryParameters['ClusterEnvType'] = $clusterEnvType;

        return $this;
    }

    /**
     * @param string $createWithArmsIntegration
     *
     * @return $this
     */
    public function setCreateWithArmsIntegration($createWithArmsIntegration)
    {
        $this->requestParameters['CreateWithArmsIntegration'] = $createWithArmsIntegration;
        $this->queryParameters['CreateWithArmsIntegration'] = $createWithArmsIntegration;

        return $this;
    }

    /**
     * @param string $keyPair
     *
     * @return $this
     */
    public function setKeyPair($keyPair)
    {
        $this->requestParameters['KeyPair'] = $keyPair;
        $this->queryParameters['KeyPair'] = $keyPair;

        return $this;
    }

    /**
     * @param string $clusterTitle
     *
     * @return $this
     */
    public function setClusterTitle($clusterTitle)
    {
        $this->requestParameters['ClusterTitle'] = $clusterTitle;
        $this->queryParameters['ClusterTitle'] = $clusterTitle;

        return $this;
    }

    /**
     * @param string $podCIDR
     *
     * @return $this
     */
    public function setPodCIDR($podCIDR)
    {
        $this->requestParameters['PodCIDR'] = $podCIDR;
        $this->queryParameters['PodCIDR'] = $podCIDR;

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
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

        return $this;
    }

    /**
     * @param string $snatEntry
     *
     * @return $this
     */
    public function setSnatEntry($snatEntry)
    {
        $this->requestParameters['SnatEntry'] = $snatEntry;
        $this->queryParameters['SnatEntry'] = $snatEntry;

        return $this;
    }

    /**
     * @param string $netPlug
     *
     * @return $this
     */
    public function setNetPlug($netPlug)
    {
        $this->requestParameters['NetPlug'] = $netPlug;
        $this->queryParameters['NetPlug'] = $netPlug;

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
     * @param string $regionName
     *
     * @return $this
     */
    public function setRegionName($regionName)
    {
        $this->requestParameters['RegionName'] = $regionName;
        $this->queryParameters['RegionName'] = $regionName;

        return $this;
    }

    /**
     * @param string $privateZone
     *
     * @return $this
     */
    public function setPrivateZone($privateZone)
    {
        $this->requestParameters['PrivateZone'] = $privateZone;
        $this->queryParameters['PrivateZone'] = $privateZone;

        return $this;
    }

    /**
     * @param string $serviceCIDR
     *
     * @return $this
     */
    public function setServiceCIDR($serviceCIDR)
    {
        $this->requestParameters['ServiceCIDR'] = $serviceCIDR;
        $this->queryParameters['ServiceCIDR'] = $serviceCIDR;

        return $this;
    }

    /**
     * @param string $publicSlb
     *
     * @return $this
     */
    public function setPublicSlb($publicSlb)
    {
        $this->requestParameters['PublicSlb'] = $publicSlb;
        $this->queryParameters['PublicSlb'] = $publicSlb;

        return $this;
    }
}
