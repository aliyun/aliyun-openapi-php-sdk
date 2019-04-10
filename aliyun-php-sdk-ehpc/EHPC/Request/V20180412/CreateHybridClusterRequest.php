<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateHybridCluster
 *
 * @method string getEhpcVersion()
 * @method string getSecurityGroupId()
 * @method string getDescription()
 * @method string getKeyPairName()
 * @method string getSecurityGroupName()
 * @method string getEcsOrderComputeInstanceType()
 * @method string getOnPremiseVolumeRemotePath()
 * @method string getJobQueue()
 * @method string getVolumeType()
 * @method string getResourceGroupId()
 * @method string getPassword()
 * @method string getOnPremiseVolumeMountPoint()
 * @method string getOnPremiseVolumeProtocol()
 * @method string getVolumeProtocol()
 * @method string getOnPremiseVolumeLocalPath()
 * @method string getClientVersion()
 * @method string getOsTag()
 * @method string getRemoteDirectory()
 * @method array getPostInstallScripts()
 * @method string getVSwitchId()
 * @method string getNodes()
 * @method array getApplications()
 * @method string getDomain()
 * @method string getVpcId()
 * @method string getName()
 * @method string getVolumeId()
 * @method string getVolumeMountpoint()
 * @method string getZoneId()
 * @method string getLocation()
 */
class CreateHybridClusterRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'CreateHybridCluster',
            'ehs'
        );
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
     * @param string $onPremiseVolumeRemotePath
     *
     * @return $this
     */
    public function setOnPremiseVolumeRemotePath($onPremiseVolumeRemotePath)
    {
        $this->requestParameters['OnPremiseVolumeRemotePath'] = $onPremiseVolumeRemotePath;
        $this->queryParameters['OnPremiseVolumeRemotePath'] = $onPremiseVolumeRemotePath;

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
     * @param string $onPremiseVolumeMountPoint
     *
     * @return $this
     */
    public function setOnPremiseVolumeMountPoint($onPremiseVolumeMountPoint)
    {
        $this->requestParameters['OnPremiseVolumeMountPoint'] = $onPremiseVolumeMountPoint;
        $this->queryParameters['OnPremiseVolumeMountPoint'] = $onPremiseVolumeMountPoint;

        return $this;
    }

    /**
     * @param string $onPremiseVolumeProtocol
     *
     * @return $this
     */
    public function setOnPremiseVolumeProtocol($onPremiseVolumeProtocol)
    {
        $this->requestParameters['OnPremiseVolumeProtocol'] = $onPremiseVolumeProtocol;
        $this->queryParameters['OnPremiseVolumeProtocol'] = $onPremiseVolumeProtocol;

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
     * @param string $onPremiseVolumeLocalPath
     *
     * @return $this
     */
    public function setOnPremiseVolumeLocalPath($onPremiseVolumeLocalPath)
    {
        $this->requestParameters['OnPremiseVolumeLocalPath'] = $onPremiseVolumeLocalPath;
        $this->queryParameters['OnPremiseVolumeLocalPath'] = $onPremiseVolumeLocalPath;

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
     * @param string $nodes
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        $this->requestParameters['Nodes'] = $nodes;
        $this->queryParameters['Nodes'] = $nodes;

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
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->requestParameters['Domain'] = $domain;
        $this->queryParameters['Domain'] = $domain;

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
     * @param string $location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->requestParameters['Location'] = $location;
        $this->queryParameters['Location'] = $location;

        return $this;
    }
}
