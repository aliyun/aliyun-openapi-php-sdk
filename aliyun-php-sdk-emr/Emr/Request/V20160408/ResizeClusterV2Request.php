<?php

namespace Emr\Request\V20160408;

/**
 * Request of ResizeClusterV2
 *
 * @method string getVswitchId()
 * @method string getIsOpenPublicIp()
 * @method string getAutoPayOrder()
 * @method array getHostComponentInfos()
 * @method array getHostGroups()
 * @method string getClusterId()
 */
class ResizeClusterV2Request extends \RpcAcsRequest
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
            'ResizeClusterV2',
            'emr'
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
     * @param string $isOpenPublicIp
     *
     * @return $this
     */
    public function setIsOpenPublicIp($isOpenPublicIp)
    {
        $this->requestParameters['IsOpenPublicIp'] = $isOpenPublicIp;
        $this->queryParameters['IsOpenPublicIp'] = $isOpenPublicIp;

        return $this;
    }

    /**
     * @param string $autoPayOrder
     *
     * @return $this
     */
    public function setAutoPayOrder($autoPayOrder)
    {
        $this->requestParameters['AutoPayOrder'] = $autoPayOrder;
        $this->queryParameters['AutoPayOrder'] = $autoPayOrder;

        return $this;
    }

    /**
     * @param array $hostComponentInfos
     *
     * @return $this
     */
    public function setHostComponentInfos(array $hostComponentInfos)
    {
        $this->requestParameters['HostComponentInfos'] = $hostComponentInfos;
        foreach ($hostComponentInfos as $i => $iValue) {
            $this->queryParameters['HostComponentInfo.' . ($i + 1) . '.HostName'] = $hostComponentInfos[$i]['HostName'];
            foreach ($hostComponentInfos[$i]['ComponentNameLists'] as $j => $jValue) {
                $this->queryParameters['HostComponentInfo.' . ($i + 1) . '.ComponentNameList.' . ($j + 1)] = $jValue;
            }
            $this->queryParameters['HostComponentInfo.' . ($i + 1) . '.ServiceName'] = $hostComponentInfos[$i]['ServiceName'];
        }

        return $this;
    }

    /**
     * @param array $hostGroups
     *
     * @return $this
     */
    public function setHostGroups(array $hostGroups)
    {
        $this->requestParameters['HostGroups'] = $hostGroups;
        foreach ($hostGroups as $i => $iValue) {
            $this->queryParameters['HostGroup.' . ($i + 1) . '.Period'] = $hostGroups[$i]['Period'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.SysDiskCapacity'] = $hostGroups[$i]['SysDiskCapacity'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.HostKeyPairName'] = $hostGroups[$i]['HostKeyPairName'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.DiskCapacity'] = $hostGroups[$i]['DiskCapacity'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.SysDiskType'] = $hostGroups[$i]['SysDiskType'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.ClusterId'] = $hostGroups[$i]['ClusterId'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.DiskType'] = $hostGroups[$i]['DiskType'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.HostGroupName'] = $hostGroups[$i]['HostGroupName'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.VswitchId'] = $hostGroups[$i]['VswitchId'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.DiskCount'] = $hostGroups[$i]['DiskCount'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.AutoRenew'] = $hostGroups[$i]['AutoRenew'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.HostGroupId'] = $hostGroups[$i]['HostGroupId'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.NodeCount'] = $hostGroups[$i]['NodeCount'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.InstanceType'] = $hostGroups[$i]['InstanceType'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.Comment'] = $hostGroups[$i]['Comment'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.ChargeType'] = $hostGroups[$i]['ChargeType'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.CreateType'] = $hostGroups[$i]['CreateType'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.HostPassword'] = $hostGroups[$i]['HostPassword'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.HostGroupType'] = $hostGroups[$i]['HostGroupType'];
        }

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
}
