<?php

namespace Emr\Request\V20160408;

/**
 * Request of ModifyClusterTemplate
 *
 * @method string getResourceOwnerId()
 * @method string getLogPath()
 * @method string getMasterPwd()
 * @method string getConfigurations()
 * @method string getIoOptimized()
 * @method string getSecurityGroupId()
 * @method string getSshEnable()
 * @method string getEasEnable()
 * @method string getSecurityGroupName()
 * @method string getDepositType()
 * @method string getMachineType()
 * @method array getBootstrapActions()
 * @method string getUseLocalMetaDb()
 * @method string getEmrVer()
 * @method string getTemplateName()
 * @method string getUserDefinedEmrEcsRole()
 * @method string getIsOpenPublicIp()
 * @method string getPeriod()
 * @method string getInstanceGeneration()
 * @method string getVSwitchId()
 * @method string getClusterType()
 * @method string getAutoRenew()
 * @method array getOptionSoftWareLists()
 * @method string getVpcId()
 * @method string getNetType()
 * @method string getBizId()
 * @method array getHostGroups()
 * @method string getZoneId()
 * @method string getChargeType()
 * @method string getUseCustomHiveMetaDb()
 * @method array getConfigs()
 * @method string getHighAvailabilityEnable()
 * @method string getInitCustomHiveMetaDb()
 */
class ModifyClusterTemplateRequest extends \RpcAcsRequest
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
            'ModifyClusterTemplate',
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
     * @param string $masterPwd
     *
     * @return $this
     */
    public function setMasterPwd($masterPwd)
    {
        $this->requestParameters['MasterPwd'] = $masterPwd;
        $this->queryParameters['MasterPwd'] = $masterPwd;

        return $this;
    }

    /**
     * @param string $configurations
     *
     * @return $this
     */
    public function setConfigurations($configurations)
    {
        $this->requestParameters['Configurations'] = $configurations;
        $this->queryParameters['Configurations'] = $configurations;

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
     * @param string $sshEnable
     *
     * @return $this
     */
    public function setSshEnable($sshEnable)
    {
        $this->requestParameters['SshEnable'] = $sshEnable;
        $this->queryParameters['SshEnable'] = $sshEnable;

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
     * @param string $securityGroupName
     *
     * @return $this
     */
    public function setSecurityGroupName($securityGroupName)
    {
        $this->requestParameters['SecurityGroupName'] = $securityGroupName;
        $this->queryParameters['SecurityGroupName'] = $securityGroupName;

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
     * @param array $bootstrapActions
     *
     * @return $this
     */
    public function setBootstrapActions(array $bootstrapActions)
    {
        $this->requestParameters['BootstrapActions'] = $bootstrapActions;
        foreach ($bootstrapActions as $i => $iValue) {
            $this->queryParameters['BootstrapAction.' . ($i + 1) . '.Path'] = $bootstrapActions[$i]['Path'];
            $this->queryParameters['BootstrapAction.' . ($i + 1) . '.Arg'] = $bootstrapActions[$i]['Arg'];
            $this->queryParameters['BootstrapAction.' . ($i + 1) . '.Name'] = $bootstrapActions[$i]['Name'];
        }

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
     * @param string $templateName
     *
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->requestParameters['TemplateName'] = $templateName;
        $this->queryParameters['TemplateName'] = $templateName;

        return $this;
    }

    /**
     * @param string $userDefinedEmrEcsRole
     *
     * @return $this
     */
    public function setUserDefinedEmrEcsRole($userDefinedEmrEcsRole)
    {
        $this->requestParameters['UserDefinedEmrEcsRole'] = $userDefinedEmrEcsRole;
        $this->queryParameters['UserDefinedEmrEcsRole'] = $userDefinedEmrEcsRole;

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
     * @param string $instanceGeneration
     *
     * @return $this
     */
    public function setInstanceGeneration($instanceGeneration)
    {
        $this->requestParameters['InstanceGeneration'] = $instanceGeneration;
        $this->queryParameters['InstanceGeneration'] = $instanceGeneration;

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
     * @param string $autoRenew
     *
     * @return $this
     */
    public function setAutoRenew($autoRenew)
    {
        $this->requestParameters['AutoRenew'] = $autoRenew;
        $this->queryParameters['AutoRenew'] = $autoRenew;

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
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

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
            $this->queryParameters['HostGroup.' . ($i + 1) . '.DiskCapacity'] = $hostGroups[$i]['DiskCapacity'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.SysDiskType'] = $hostGroups[$i]['SysDiskType'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.ClusterId'] = $hostGroups[$i]['ClusterId'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.DiskType'] = $hostGroups[$i]['DiskType'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.HostGroupName'] = $hostGroups[$i]['HostGroupName'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.VSwitchId'] = $hostGroups[$i]['VSwitchId'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.DiskCount'] = $hostGroups[$i]['DiskCount'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.AutoRenew'] = $hostGroups[$i]['AutoRenew'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.HostGroupId'] = $hostGroups[$i]['HostGroupId'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.NodeCount'] = $hostGroups[$i]['NodeCount'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.InstanceType'] = $hostGroups[$i]['InstanceType'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.Comment'] = $hostGroups[$i]['Comment'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.ChargeType'] = $hostGroups[$i]['ChargeType'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.MultiInstanceTypes'] = $hostGroups[$i]['MultiInstanceTypes'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.CreateType'] = $hostGroups[$i]['CreateType'];
            $this->queryParameters['HostGroup.' . ($i + 1) . '.HostGroupType'] = $hostGroups[$i]['HostGroupType'];
        }

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
     * @param string $useCustomHiveMetaDb
     *
     * @return $this
     */
    public function setUseCustomHiveMetaDb($useCustomHiveMetaDb)
    {
        $this->requestParameters['UseCustomHiveMetaDb'] = $useCustomHiveMetaDb;
        $this->queryParameters['UseCustomHiveMetaDb'] = $useCustomHiveMetaDb;

        return $this;
    }

    /**
     * @param array $configs
     *
     * @return $this
     */
    public function setConfigs(array $configs)
    {
        $this->requestParameters['Configs'] = $configs;
        foreach ($configs as $i => $iValue) {
            $this->queryParameters['Config.' . ($i + 1) . '.ConfigKey'] = $configs[$i]['ConfigKey'];
            $this->queryParameters['Config.' . ($i + 1) . '.FileName'] = $configs[$i]['FileName'];
            $this->queryParameters['Config.' . ($i + 1) . '.Encrypt'] = $configs[$i]['Encrypt'];
            $this->queryParameters['Config.' . ($i + 1) . '.Replace'] = $configs[$i]['Replace'];
            $this->queryParameters['Config.' . ($i + 1) . '.ConfigValue'] = $configs[$i]['ConfigValue'];
            $this->queryParameters['Config.' . ($i + 1) . '.ServiceName'] = $configs[$i]['ServiceName'];
        }

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

    /**
     * @param string $initCustomHiveMetaDb
     *
     * @return $this
     */
    public function setInitCustomHiveMetaDb($initCustomHiveMetaDb)
    {
        $this->requestParameters['InitCustomHiveMetaDb'] = $initCustomHiveMetaDb;
        $this->queryParameters['InitCustomHiveMetaDb'] = $initCustomHiveMetaDb;

        return $this;
    }
}
