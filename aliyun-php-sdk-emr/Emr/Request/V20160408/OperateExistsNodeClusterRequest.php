<?php

namespace Emr\Request\V20160408;

/**
 * Request of OperateExistsNodeCluster
 *
 * @method string getResourceOwnerId()
 * @method string getLogPath()
 * @method array getMasterInstanceIdLists()
 * @method string getIoOptimized()
 * @method string getSecurityGroupId()
 * @method string getEasEnable()
 * @method string getIsResize()
 * @method string getDepositType()
 * @method string getMachineType()
 * @method string getUseLocalMetaDb()
 * @method string getEmrVer()
 * @method string getPeriod()
 * @method string getClusterId()
 * @method string getVSwitchId()
 * @method string getClusterType()
 * @method array getOptionSoftWareLists()
 * @method array getInstanceIdLists()
 * @method string getVpcId()
 * @method string getNetType()
 * @method string getName()
 * @method string getZoneId()
 * @method string getChargeType()
 * @method string getOperateType()
 * @method string getHighAvailabilityEnable()
 */
class OperateExistsNodeClusterRequest extends \RpcAcsRequest
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
            'OperateExistsNodeCluster',
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
     * @param string $logPath
     *
     * @return $this
     */
    public function setLogPath($logPath)
    {
        $this->requestParameters['LogPath'] = $logPath;
        $this->queryParameters['LogPath'] = $logPath;

        return $this;
    }

    /**
     * @param array $masterInstanceIdLists
     *
     * @return $this
     */
    public function setMasterInstanceIdLists(array $masterInstanceIdLists)
    {
        $this->requestParameters['MasterInstanceIdLists'] = $masterInstanceIdLists;
        foreach ($masterInstanceIdLists as $i => $iValue) {
            $this->queryParameters['MasterInstanceIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function setIoOptimized($ioOptimized)
    {
        $this->requestParameters['IoOptimized'] = $ioOptimized;
        $this->queryParameters['IoOptimized'] = $ioOptimized;

        return $this;
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->requestParameters['SecurityGroupId'] = $securityGroupId;
        $this->queryParameters['SecurityGroupId'] = $securityGroupId;

        return $this;
    }

    /**
     * @param string $easEnable
     *
     * @return $this
     */
    public function setEasEnable($easEnable)
    {
        $this->requestParameters['EasEnable'] = $easEnable;
        $this->queryParameters['EasEnable'] = $easEnable;

        return $this;
    }

    /**
     * @param string $isResize
     *
     * @return $this
     */
    public function setIsResize($isResize)
    {
        $this->requestParameters['IsResize'] = $isResize;
        $this->queryParameters['IsResize'] = $isResize;

        return $this;
    }

    /**
     * @param string $depositType
     *
     * @return $this
     */
    public function setDepositType($depositType)
    {
        $this->requestParameters['DepositType'] = $depositType;
        $this->queryParameters['DepositType'] = $depositType;

        return $this;
    }

    /**
     * @param string $machineType
     *
     * @return $this
     */
    public function setMachineType($machineType)
    {
        $this->requestParameters['MachineType'] = $machineType;
        $this->queryParameters['MachineType'] = $machineType;

        return $this;
    }

    /**
     * @param string $useLocalMetaDb
     *
     * @return $this
     */
    public function setUseLocalMetaDb($useLocalMetaDb)
    {
        $this->requestParameters['UseLocalMetaDb'] = $useLocalMetaDb;
        $this->queryParameters['UseLocalMetaDb'] = $useLocalMetaDb;

        return $this;
    }

    /**
     * @param string $emrVer
     *
     * @return $this
     */
    public function setEmrVer($emrVer)
    {
        $this->requestParameters['EmrVer'] = $emrVer;
        $this->queryParameters['EmrVer'] = $emrVer;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

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
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;

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
     * @param array $optionSoftWareLists
     *
     * @return $this
     */
    public function setOptionSoftWareLists(array $optionSoftWareLists)
    {
        $this->requestParameters['OptionSoftWareLists'] = $optionSoftWareLists;
        foreach ($optionSoftWareLists as $i => $iValue) {
            $this->queryParameters['OptionSoftWareList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $instanceIdLists
     *
     * @return $this
     */
    public function setInstanceIdLists(array $instanceIdLists)
    {
        $this->requestParameters['InstanceIdLists'] = $instanceIdLists;
        foreach ($instanceIdLists as $i => $iValue) {
            $this->queryParameters['InstanceIdList.' . ($i + 1)] = $iValue;
        }

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
     * @param string $netType
     *
     * @return $this
     */
    public function setNetType($netType)
    {
        $this->requestParameters['NetType'] = $netType;
        $this->queryParameters['NetType'] = $netType;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->requestParameters['ChargeType'] = $chargeType;
        $this->queryParameters['ChargeType'] = $chargeType;

        return $this;
    }

    /**
     * @param string $operateType
     *
     * @return $this
     */
    public function setOperateType($operateType)
    {
        $this->requestParameters['OperateType'] = $operateType;
        $this->queryParameters['OperateType'] = $operateType;

        return $this;
    }

    /**
     * @param string $highAvailabilityEnable
     *
     * @return $this
     */
    public function setHighAvailabilityEnable($highAvailabilityEnable)
    {
        $this->requestParameters['HighAvailabilityEnable'] = $highAvailabilityEnable;
        $this->queryParameters['HighAvailabilityEnable'] = $highAvailabilityEnable;

        return $this;
    }
}
