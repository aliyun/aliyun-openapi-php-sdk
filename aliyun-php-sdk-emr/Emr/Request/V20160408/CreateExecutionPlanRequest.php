<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateExecutionPlan
 *
 * @method string getResourceOwnerId()
 * @method string getTimeInterval()
 * @method string getLogPath()
 * @method string getClusterName()
 * @method string getConfigurations()
 * @method string getIoOptimized()
 * @method string getSecurityGroupId()
 * @method string getEasEnable()
 * @method string getCreateClusterOnDemand()
 * @method string getStartTime()
 * @method array getJobIdLists()
 * @method string getDayOfMonth()
 * @method array getBootstrapActions()
 * @method string getUseLocalMetaDb()
 * @method string getEmrVer()
 * @method string getUserDefinedEmrEcsRole()
 * @method string getIsOpenPublicIp()
 * @method string getClusterId()
 * @method string getTimeUnit()
 * @method string getInstanceGeneration()
 * @method string getClusterType()
 * @method string getVSwitchId()
 * @method array getOptionSoftWareLists()
 * @method string getVpcId()
 * @method string getNetType()
 * @method array getEcsOrders()
 * @method string getWorkflowDefinition()
 * @method string getName()
 * @method string getDayOfWeek()
 * @method string getZoneId()
 * @method string getUseCustomHiveMetaDB()
 * @method string getStrategy()
 * @method array getConfigs()
 * @method string getHighAvailabilityEnable()
 * @method string getInitCustomHiveMetaDB()
 * @method string getLogEnable()
 */
class CreateExecutionPlanRequest extends \RpcAcsRequest
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
            'CreateExecutionPlan',
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
     * @param string $timeInterval
     *
     * @return $this
     */
    public function setTimeInterval($timeInterval)
    {
        $this->requestParameters['TimeInterval'] = $timeInterval;
        $this->queryParameters['TimeInterval'] = $timeInterval;

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
     * @param string $clusterName
     *
     * @return $this
     */
    public function setClusterName($clusterName)
    {
        $this->requestParameters['ClusterName'] = $clusterName;
        $this->queryParameters['ClusterName'] = $clusterName;

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
     * @param string $createClusterOnDemand
     *
     * @return $this
     */
    public function setCreateClusterOnDemand($createClusterOnDemand)
    {
        $this->requestParameters['CreateClusterOnDemand'] = $createClusterOnDemand;
        $this->queryParameters['CreateClusterOnDemand'] = $createClusterOnDemand;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param array $jobIdLists
     *
     * @return $this
     */
    public function setJobIdLists(array $jobIdLists)
    {
        $this->requestParameters['JobIdLists'] = $jobIdLists;
        foreach ($jobIdLists as $i => $iValue) {
            $this->queryParameters['JobIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $dayOfMonth
     *
     * @return $this
     */
    public function setDayOfMonth($dayOfMonth)
    {
        $this->requestParameters['DayOfMonth'] = $dayOfMonth;
        $this->queryParameters['DayOfMonth'] = $dayOfMonth;

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
     * @param string $timeUnit
     *
     * @return $this
     */
    public function setTimeUnit($timeUnit)
    {
        $this->requestParameters['TimeUnit'] = $timeUnit;
        $this->queryParameters['TimeUnit'] = $timeUnit;

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
     * @param array $ecsOrders
     *
     * @return $this
     */
    public function setEcsOrders(array $ecsOrders)
    {
        $this->requestParameters['EcsOrders'] = $ecsOrders;
        foreach ($ecsOrders as $i => $iValue) {
            $this->queryParameters['EcsOrder.' . ($i + 1) . '.NodeType'] = $ecsOrders[$i]['NodeType'];
            $this->queryParameters['EcsOrder.' . ($i + 1) . '.DiskCount'] = $ecsOrders[$i]['DiskCount'];
            $this->queryParameters['EcsOrder.' . ($i + 1) . '.NodeCount'] = $ecsOrders[$i]['NodeCount'];
            $this->queryParameters['EcsOrder.' . ($i + 1) . '.DiskCapacity'] = $ecsOrders[$i]['DiskCapacity'];
            $this->queryParameters['EcsOrder.' . ($i + 1) . '.Index'] = $ecsOrders[$i]['Index'];
            $this->queryParameters['EcsOrder.' . ($i + 1) . '.InstanceType'] = $ecsOrders[$i]['InstanceType'];
            $this->queryParameters['EcsOrder.' . ($i + 1) . '.DiskType'] = $ecsOrders[$i]['DiskType'];
        }

        return $this;
    }

    /**
     * @param string $workflowDefinition
     *
     * @return $this
     */
    public function setWorkflowDefinition($workflowDefinition)
    {
        $this->requestParameters['WorkflowDefinition'] = $workflowDefinition;
        $this->queryParameters['WorkflowDefinition'] = $workflowDefinition;

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
     * @param string $dayOfWeek
     *
     * @return $this
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->requestParameters['DayOfWeek'] = $dayOfWeek;
        $this->queryParameters['DayOfWeek'] = $dayOfWeek;

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
     * @param string $useCustomHiveMetaDB
     *
     * @return $this
     */
    public function setUseCustomHiveMetaDB($useCustomHiveMetaDB)
    {
        $this->requestParameters['UseCustomHiveMetaDB'] = $useCustomHiveMetaDB;
        $this->queryParameters['UseCustomHiveMetaDB'] = $useCustomHiveMetaDB;

        return $this;
    }

    /**
     * @param string $strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->requestParameters['Strategy'] = $strategy;
        $this->queryParameters['Strategy'] = $strategy;

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
     * @param string $initCustomHiveMetaDB
     *
     * @return $this
     */
    public function setInitCustomHiveMetaDB($initCustomHiveMetaDB)
    {
        $this->requestParameters['InitCustomHiveMetaDB'] = $initCustomHiveMetaDB;
        $this->queryParameters['InitCustomHiveMetaDB'] = $initCustomHiveMetaDB;

        return $this;
    }

    /**
     * @param string $logEnable
     *
     * @return $this
     */
    public function setLogEnable($logEnable)
    {
        $this->requestParameters['LogEnable'] = $logEnable;
        $this->queryParameters['LogEnable'] = $logEnable;

        return $this;
    }
}
