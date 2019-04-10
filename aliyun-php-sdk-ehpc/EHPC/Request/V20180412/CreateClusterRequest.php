<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateCluster
 *
 * @method string getSccClusterId()
 * @method string getImageId()
 * @method array getAdditionalVolumess()
 * @method string getEcsOrderManagerInstanceType()
 * @method string getEhpcVersion()
 * @method string getAccountType()
 * @method string getSecurityGroupId()
 * @method string getDescription()
 * @method string getKeyPairName()
 * @method string getSecurityGroupName()
 * @method string getEcsOrderComputeInstanceType()
 * @method string getJobQueue()
 * @method string getImageOwnerAlias()
 * @method string getVolumeType()
 * @method string getDeployMode()
 * @method string getEcsOrderManagerCount()
 * @method string getResourceGroupId()
 * @method string getPassword()
 * @method string getEcsOrderLoginCount()
 * @method string getRemoteVisEnable()
 * @method string getSystemDiskSize()
 * @method string getComputeSpotPriceLimit()
 * @method string getAutoRenewPeriod()
 * @method string getPeriod()
 * @method string getVolumeProtocol()
 * @method string getClientVersion()
 * @method string getOsTag()
 * @method string getRemoteDirectory()
 * @method string getEcsOrderComputeCount()
 * @method string getComputeSpotStrategy()
 * @method array getPostInstallScripts()
 * @method string getVSwitchId()
 * @method string getPeriodUnit()
 * @method array getApplications()
 * @method string getAutoRenew()
 * @method string getEcsChargeType()
 * @method string getInputFileUrl()
 * @method string getVpcId()
 * @method string getHaEnable()
 * @method string getName()
 * @method string getSchedulerType()
 * @method string getVolumeId()
 * @method string getVolumeMountpoint()
 * @method string getEcsOrderLoginInstanceType()
 * @method string getZoneId()
 */
class CreateClusterRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'CreateCluster',
            'ehs'
        );
    }

    /**
     * @param string $sccClusterId
     *
     * @return $this
     */
    public function setSccClusterId($sccClusterId)
    {
        $this->requestParameters['SccClusterId'] = $sccClusterId;
        $this->queryParameters['SccClusterId'] = $sccClusterId;

        return $this;
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->requestParameters['ImageId'] = $imageId;
        $this->queryParameters['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param array $additionalVolumes
     *
     * @return $this
     */
    public function setAdditionalVolumess(array $additionalVolumes)
    {
        $this->requestParameters['AdditionalVolumess'] = $additionalVolumes;
        foreach ($additionalVolumes as $depth1 => $depth1Value) {
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeType'] = $depth1Value['VolumeType'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeProtocol'] = $depth1Value['VolumeProtocol'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.LocalDirectory'] = $depth1Value['LocalDirectory'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.RemoteDirectory'] = $depth1Value['RemoteDirectory'];
            foreach ($depth1Value['Roles'] as $depth2 => $depth2Value) {
                $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.Roles.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
            }
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeId'] = $depth1Value['VolumeId'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeMountpoint'] = $depth1Value['VolumeMountpoint'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.Location'] = $depth1Value['Location'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.JobQueue'] = $depth1Value['JobQueue'];
        }

        return $this;
    }

    /**
     * @param string $ecsOrderManagerInstanceType
     *
     * @return $this
     */
    public function setEcsOrderManagerInstanceType($ecsOrderManagerInstanceType)
    {
        $this->requestParameters['EcsOrderManagerInstanceType'] = $ecsOrderManagerInstanceType;
        $this->queryParameters['EcsOrder.Manager.InstanceType'] = $ecsOrderManagerInstanceType;

        return $this;
    }

    /**
     * @param string $ehpcVersion
     *
     * @return $this
     */
    public function setEhpcVersion($ehpcVersion)
    {
        $this->requestParameters['EhpcVersion'] = $ehpcVersion;
        $this->queryParameters['EhpcVersion'] = $ehpcVersion;

        return $this;
    }

    /**
     * @param string $accountType
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->requestParameters['AccountType'] = $accountType;
        $this->queryParameters['AccountType'] = $accountType;

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
     * @param string $keyPairName
     *
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        $this->requestParameters['KeyPairName'] = $keyPairName;
        $this->queryParameters['KeyPairName'] = $keyPairName;

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
     * @param string $ecsOrderComputeInstanceType
     *
     * @return $this
     */
    public function setEcsOrderComputeInstanceType($ecsOrderComputeInstanceType)
    {
        $this->requestParameters['EcsOrderComputeInstanceType'] = $ecsOrderComputeInstanceType;
        $this->queryParameters['EcsOrder.Compute.InstanceType'] = $ecsOrderComputeInstanceType;

        return $this;
    }

    /**
     * @param string $jobQueue
     *
     * @return $this
     */
    public function setJobQueue($jobQueue)
    {
        $this->requestParameters['JobQueue'] = $jobQueue;
        $this->queryParameters['JobQueue'] = $jobQueue;

        return $this;
    }

    /**
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function setImageOwnerAlias($imageOwnerAlias)
    {
        $this->requestParameters['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->queryParameters['ImageOwnerAlias'] = $imageOwnerAlias;

        return $this;
    }

    /**
     * @param string $volumeType
     *
     * @return $this
     */
    public function setVolumeType($volumeType)
    {
        $this->requestParameters['VolumeType'] = $volumeType;
        $this->queryParameters['VolumeType'] = $volumeType;

        return $this;
    }

    /**
     * @param string $deployMode
     *
     * @return $this
     */
    public function setDeployMode($deployMode)
    {
        $this->requestParameters['DeployMode'] = $deployMode;
        $this->queryParameters['DeployMode'] = $deployMode;

        return $this;
    }

    /**
     * @param string $ecsOrderManagerCount
     *
     * @return $this
     */
    public function setEcsOrderManagerCount($ecsOrderManagerCount)
    {
        $this->requestParameters['EcsOrderManagerCount'] = $ecsOrderManagerCount;
        $this->queryParameters['EcsOrder.Manager.Count'] = $ecsOrderManagerCount;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

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
     * @param string $ecsOrderLoginCount
     *
     * @return $this
     */
    public function setEcsOrderLoginCount($ecsOrderLoginCount)
    {
        $this->requestParameters['EcsOrderLoginCount'] = $ecsOrderLoginCount;
        $this->queryParameters['EcsOrder.Login.Count'] = $ecsOrderLoginCount;

        return $this;
    }

    /**
     * @param string $remoteVisEnable
     *
     * @return $this
     */
    public function setRemoteVisEnable($remoteVisEnable)
    {
        $this->requestParameters['RemoteVisEnable'] = $remoteVisEnable;
        $this->queryParameters['RemoteVisEnable'] = $remoteVisEnable;

        return $this;
    }

    /**
     * @param string $systemDiskSize
     *
     * @return $this
     */
    public function setSystemDiskSize($systemDiskSize)
    {
        $this->requestParameters['SystemDiskSize'] = $systemDiskSize;
        $this->queryParameters['SystemDiskSize'] = $systemDiskSize;

        return $this;
    }

    /**
     * @param string $computeSpotPriceLimit
     *
     * @return $this
     */
    public function setComputeSpotPriceLimit($computeSpotPriceLimit)
    {
        $this->requestParameters['ComputeSpotPriceLimit'] = $computeSpotPriceLimit;
        $this->queryParameters['ComputeSpotPriceLimit'] = $computeSpotPriceLimit;

        return $this;
    }

    /**
     * @param string $autoRenewPeriod
     *
     * @return $this
     */
    public function setAutoRenewPeriod($autoRenewPeriod)
    {
        $this->requestParameters['AutoRenewPeriod'] = $autoRenewPeriod;
        $this->queryParameters['AutoRenewPeriod'] = $autoRenewPeriod;

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
     * @param string $volumeProtocol
     *
     * @return $this
     */
    public function setVolumeProtocol($volumeProtocol)
    {
        $this->requestParameters['VolumeProtocol'] = $volumeProtocol;
        $this->queryParameters['VolumeProtocol'] = $volumeProtocol;

        return $this;
    }

    /**
     * @param string $clientVersion
     *
     * @return $this
     */
    public function setClientVersion($clientVersion)
    {
        $this->requestParameters['ClientVersion'] = $clientVersion;
        $this->queryParameters['ClientVersion'] = $clientVersion;

        return $this;
    }

    /**
     * @param string $osTag
     *
     * @return $this
     */
    public function setOsTag($osTag)
    {
        $this->requestParameters['OsTag'] = $osTag;
        $this->queryParameters['OsTag'] = $osTag;

        return $this;
    }

    /**
     * @param string $remoteDirectory
     *
     * @return $this
     */
    public function setRemoteDirectory($remoteDirectory)
    {
        $this->requestParameters['RemoteDirectory'] = $remoteDirectory;
        $this->queryParameters['RemoteDirectory'] = $remoteDirectory;

        return $this;
    }

    /**
     * @param string $ecsOrderComputeCount
     *
     * @return $this
     */
    public function setEcsOrderComputeCount($ecsOrderComputeCount)
    {
        $this->requestParameters['EcsOrderComputeCount'] = $ecsOrderComputeCount;
        $this->queryParameters['EcsOrder.Compute.Count'] = $ecsOrderComputeCount;

        return $this;
    }

    /**
     * @param string $computeSpotStrategy
     *
     * @return $this
     */
    public function setComputeSpotStrategy($computeSpotStrategy)
    {
        $this->requestParameters['ComputeSpotStrategy'] = $computeSpotStrategy;
        $this->queryParameters['ComputeSpotStrategy'] = $computeSpotStrategy;

        return $this;
    }

    /**
     * @param array $postInstallScript
     *
     * @return $this
     */
    public function setPostInstallScripts(array $postInstallScript)
    {
        $this->requestParameters['PostInstallScripts'] = $postInstallScript;
        foreach ($postInstallScript as $depth1 => $depth1Value) {
            $this->queryParameters['PostInstallScript.' . ($depth1 + 1) . '.Args'] = $depth1Value['Args'];
            $this->queryParameters['PostInstallScript.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
        }

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
     * @param string $periodUnit
     *
     * @return $this
     */
    public function setPeriodUnit($periodUnit)
    {
        $this->requestParameters['PeriodUnit'] = $periodUnit;
        $this->queryParameters['PeriodUnit'] = $periodUnit;

        return $this;
    }

    /**
     * @param array $application
     *
     * @return $this
     */
    public function setApplications(array $application)
    {
        $this->requestParameters['Applications'] = $application;
        foreach ($application as $depth1 => $depth1Value) {
            $this->queryParameters['Application.' . ($depth1 + 1) . '.Tag'] = $depth1Value['Tag'];
        }

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
     * @param string $ecsChargeType
     *
     * @return $this
     */
    public function setEcsChargeType($ecsChargeType)
    {
        $this->requestParameters['EcsChargeType'] = $ecsChargeType;
        $this->queryParameters['EcsChargeType'] = $ecsChargeType;

        return $this;
    }

    /**
     * @param string $inputFileUrl
     *
     * @return $this
     */
    public function setInputFileUrl($inputFileUrl)
    {
        $this->requestParameters['InputFileUrl'] = $inputFileUrl;
        $this->queryParameters['InputFileUrl'] = $inputFileUrl;

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
     * @param string $haEnable
     *
     * @return $this
     */
    public function setHaEnable($haEnable)
    {
        $this->requestParameters['HaEnable'] = $haEnable;
        $this->queryParameters['HaEnable'] = $haEnable;

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
     * @param string $schedulerType
     *
     * @return $this
     */
    public function setSchedulerType($schedulerType)
    {
        $this->requestParameters['SchedulerType'] = $schedulerType;
        $this->queryParameters['SchedulerType'] = $schedulerType;

        return $this;
    }

    /**
     * @param string $volumeId
     *
     * @return $this
     */
    public function setVolumeId($volumeId)
    {
        $this->requestParameters['VolumeId'] = $volumeId;
        $this->queryParameters['VolumeId'] = $volumeId;

        return $this;
    }

    /**
     * @param string $volumeMountpoint
     *
     * @return $this
     */
    public function setVolumeMountpoint($volumeMountpoint)
    {
        $this->requestParameters['VolumeMountpoint'] = $volumeMountpoint;
        $this->queryParameters['VolumeMountpoint'] = $volumeMountpoint;

        return $this;
    }

    /**
     * @param string $ecsOrderLoginInstanceType
     *
     * @return $this
     */
    public function setEcsOrderLoginInstanceType($ecsOrderLoginInstanceType)
    {
        $this->requestParameters['EcsOrderLoginInstanceType'] = $ecsOrderLoginInstanceType;
        $this->queryParameters['EcsOrder.Login.InstanceType'] = $ecsOrderLoginInstanceType;

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
}
