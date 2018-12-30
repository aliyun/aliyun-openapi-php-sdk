<?php

namespace Eci\Request\V20180808;

/**
 * Class CreateContainerGroupRequest
 *
 * @author    Alibaba Cloud SDK <sdk-team@alibabacloud.com>
 * @copyright 2019 Alibaba Group
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/aliyun/aliyun-openapi-php-sdk
 *
 * @method array getContainers()
 * @method string getResourceOwnerId()
 * @method string getMemory()
 * @method string getSecurityGroupId()
 * @method array getInitContainers()
 * @method array getImageRegistryCredentials()
 * @method array getTags()
 * @method string getEipInstanceId()
 * @method array getDnsConfigNameServers()
 * @method string getResourceOwnerAccount()
 * @method string getRestartPolicy()
 * @method string getOwnerAccount()
 * @method array getDnsConfigOptions()
 * @method string getCpu()
 * @method array getDnsConfigSearchs()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method array getVolumes()
 * @method string getContainerGroupName()
 * @method string getZoneId()
 */
class CreateContainerGroupRequest extends \RpcAcsRequest
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
            'Eci',
            '2018-08-08',
            'CreateContainerGroup',
            'eci',
            'openAPI'
        );
    }

    /**
     * @param array $Containers
     *
     * @return $this
     */
    public function setContainers(array $Containers)
    {
        $this->requestParameters['Containers'] = $Containers;
        foreach ($Containers as $i => $iValue) {
            $this->queryParameters['Container.' . ($i + 1) . '.Image'] = $Containers[$i]['Image'];
            $this->queryParameters['Container.' . ($i + 1) . '.Name'] = $Containers[$i]['Name'];
            $this->queryParameters['Container.' . ($i + 1) . '.Cpu'] = $Containers[$i]['Cpu'];
            $this->queryParameters['Container.' . ($i + 1) . '.Memory'] = $Containers[$i]['Memory'];
            $this->queryParameters['Container.' . ($i + 1) . '.WorkingDir'] = $Containers[$i]['WorkingDir'];
            $this->queryParameters['Container.' . ($i + 1) . '.ImagePullPolicy'] = $Containers[$i]['ImagePullPolicy'];

            foreach ($Containers[$i]['Commands'] as $j => $jValue) {
                $this->queryParameters['Container.' . ($i + 1) . '.Command.' . ($j + 1)] = $jValue;
            }

            foreach ($Containers[$i]['Args'] as $j => $jValue) {
                $this->queryParameters['Container.' . ($i + 1) . '.Arg.' . ($j + 1)] = $jValue;
            }

            foreach ($Containers[$i]['VolumeMounts'] as $j => $jValue) {
                $this->queryParameters['Container.' . ($i + 1) . '.VolumeMount.' . ($j + 1)] = $jValue;
            }

            foreach ($Containers[$i]['Ports'] as $j => $jValue) {
                $this->queryParameters['Container.' . ($i + 1) . '.Port.' . ($j + 1)] = $jValue;
            }

            foreach ($Containers[$i]['EnvironmentVars'] as $j => $jValue) {
                $this->queryParameters['Container.' . ($i + 1) . '.EnvironmentVar.' . ($j + 1)] = $jValue;
            }
            $this->queryParameters['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Path'] = $Containers[$i]['ReadinessProbe.HttpGet.Path'];
            $this->queryParameters['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Port'] = $Containers[$i]['ReadinessProbe.HttpGet.Port'];
            $this->queryParameters['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Scheme'] = $Containers[$i]['ReadinessProbe.HttpGet.Scheme'];
            $this->queryParameters['Container.' . ($i + 1) . '.ReadinessProbe.InitialDelaySeconds'] = $Containers[$i]['ReadinessProbe.InitialDelaySeconds'];
            $this->queryParameters['Container.' . ($i + 1) . '.ReadinessProbe.PeriodSeconds'] = $Containers[$i]['ReadinessProbe.PeriodSeconds'];
            $this->queryParameters['Container.' . ($i + 1) . '.ReadinessProbe.SuccessThreshold'] = $Containers[$i]['ReadinessProbe.SuccessThreshold'];
            $this->queryParameters['Container.' . ($i + 1) . '.ReadinessProbe.FailureThreshold'] = $Containers[$i]['ReadinessProbe.FailureThreshold'];
            $this->queryParameters['Container.' . ($i + 1) . '.ReadinessProbe.TimeoutSeconds'] = $Containers[$i]['ReadinessProbe.TimeoutSeconds'];

            foreach ($Containers[$i]['ReadinessProbe.Exec.Commands'] as $j => $jValue) {
                $this->queryParameters['Container.' . ($i + 1) . '.ReadinessProbe.Exec.Command.' . ($j + 1)] = $jValue;
            }
            $this->queryParameters['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Path'] = $Containers[$i]['LivenessProbe.HttpGet.Path'];
            $this->queryParameters['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Port'] = $Containers[$i]['LivenessProbe.HttpGet.Port'];
            $this->queryParameters['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Scheme'] = $Containers[$i]['LivenessProbe.HttpGet.Scheme'];
            $this->queryParameters['Container.' . ($i + 1) . '.LivenessProbe.InitialDelaySeconds'] = $Containers[$i]['LivenessProbe.InitialDelaySeconds'];
            $this->queryParameters['Container.' . ($i + 1) . '.LivenessProbe.PeriodSeconds'] = $Containers[$i]['LivenessProbe.PeriodSeconds'];
            $this->queryParameters['Container.' . ($i + 1) . '.LivenessProbe.SuccessThreshold'] = $Containers[$i]['LivenessProbe.SuccessThreshold'];
            $this->queryParameters['Container.' . ($i + 1) . '.LivenessProbe.FailureThreshold'] = $Containers[$i]['LivenessProbe.FailureThreshold'];
            $this->queryParameters['Container.' . ($i + 1) . '.LivenessProbe.TimeoutSeconds'] = $Containers[$i]['LivenessProbe.TimeoutSeconds'];

            foreach ($Containers[$i]['LivenessProbe.Exec.Commands'] as $j => $jValue) {
                $this->queryParameters['Container.' . ($i + 1) . '.LivenessProbe.Exec.Command.' . ($j + 1)] = $jValue;
            }

            foreach ($Containers[$i]['SecurityContext.Capability.Adds'] as $j => $jValue) {
                $this->queryParameters['Container.' . ($i + 1) . '.SecurityContext.Capability.Add.' . ($j + 1)] = $jValue;
            }
            $this->queryParameters['Container.' . ($i + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $Containers[$i]['SecurityContext.ReadOnlyRootFilesystem'];
            $this->queryParameters['Container.' . ($i + 1) . '.SecurityContext.RunAsUser'] = $Containers[$i]['SecurityContext.RunAsUser'];
            $this->queryParameters['Container.' . ($i + 1) . '.ReadinessProbe.TcpSocket.Port'] = $Containers[$i]['ReadinessProbe.TcpSocket.Port'];
            $this->queryParameters['Container.' . ($i + 1) . '.LivenessProbe.TcpSocket.Port'] = $Containers[$i]['LivenessProbe.TcpSocket.Port'];
        }
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
     * @param string $memory
     *
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->requestParameters['Memory'] = $memory;
        $this->queryParameters['Memory'] = $memory;
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
     * @param array $InitContainers
     *
     * @return $this
     */
    public function setInitContainers(array $InitContainers)
    {
        $this->requestParameters['InitContainers'] = $InitContainers;
        foreach ($InitContainers as $i => $iValue) {
            $this->queryParameters['InitContainer.' . ($i + 1) . '.Name'] = $InitContainers[$i]['Name'];
            $this->queryParameters['InitContainer.' . ($i + 1) . '.Image'] = $InitContainers[$i]['Image'];
            $this->queryParameters['InitContainer.' . ($i + 1) . '.Cpu'] = $InitContainers[$i]['Cpu'];
            $this->queryParameters['InitContainer.' . ($i + 1) . '.Memory'] = $InitContainers[$i]['Memory'];
            $this->queryParameters['InitContainer.' . ($i + 1) . '.WorkingDir'] = $InitContainers[$i]['WorkingDir'];
            $this->queryParameters['InitContainer.' . ($i + 1) . '.ImagePullPolicy'] = $InitContainers[$i]['ImagePullPolicy'];

            foreach ($InitContainers[$i]['Commands'] as $j => $jValue) {
                $this->queryParameters['InitContainer.' . ($i + 1) . '.Command.' . ($j + 1)] = $jValue;
            }

            foreach ($InitContainers[$i]['Args'] as $j => $jValue) {
                $this->queryParameters['InitContainer.' . ($i + 1) . '.Arg.' . ($j + 1)] = $jValue;
            }

            foreach ($InitContainers[$i]['VolumeMounts'] as $j => $jValue) {
                $this->queryParameters['InitContainer.' . ($i + 1) . '.VolumeMount.' . ($j + 1)] = $jValue;
            }

            foreach ($InitContainers[$i]['Ports'] as $j => $jValue) {
                $this->queryParameters['InitContainer.' . ($i + 1) . '.Port.' . ($j + 1)] = $jValue;
            }

            foreach ($InitContainers[$i]['EnvironmentVars'] as $j => $jValue) {
                $this->queryParameters['InitContainer.' . ($i + 1) . '.EnvironmentVar.' . ($j + 1)] = $jValue;
            }

            foreach ($InitContainers[$i]['SecurityContext.Capability.Adds'] as $j => $jValue) {
                $this->queryParameters['InitContainer.' . ($i + 1) . '.SecurityContext.Capability.Add.' . ($j + 1)] = $jValue;
            }
            $this->queryParameters['InitContainer.' . ($i + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $InitContainers[$i]['SecurityContext.ReadOnlyRootFilesystem'];
            $this->queryParameters['InitContainer.' . ($i + 1) . '.SecurityContext.RunAsUser'] = $InitContainers[$i]['SecurityContext.RunAsUser'];
        }
        return $this;
    }

    /**
     * @param array $ImageRegistryCredentials
     *
     * @return $this
     */
    public function setImageRegistryCredentials(array $ImageRegistryCredentials)
    {
        $this->requestParameters['ImageRegistryCredentials'] = $ImageRegistryCredentials;
        foreach ($ImageRegistryCredentials as $i => $iValue) {
            $this->queryParameters['ImageRegistryCredential.' . ($i + 1) . '.Server'] = $ImageRegistryCredentials[$i]['Server'];
            $this->queryParameters['ImageRegistryCredential.' . ($i + 1) . '.UserName'] = $ImageRegistryCredentials[$i]['UserName'];
            $this->queryParameters['ImageRegistryCredential.' . ($i + 1) . '.Password'] = $ImageRegistryCredentials[$i]['Password'];
        }
        return $this;
    }

    /**
     * @param array $Tags
     *
     * @return $this
     */
    public function setTags(array $Tags)
    {
        $this->requestParameters['Tags'] = $Tags;
        foreach ($Tags as $i => $iValue) {
            $this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $Tags[$i]['Key'];
            $this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $Tags[$i]['Value'];
        }
        return $this;
    }

    /**
     * @param string $eipInstanceId
     *
     * @return $this
     */
    public function setEipInstanceId($eipInstanceId)
    {
        $this->requestParameters['EipInstanceId'] = $eipInstanceId;
        $this->queryParameters['EipInstanceId'] = $eipInstanceId;
        return $this;
    }

    /**
     * @param array $DnsConfigNameServers
     *
     * @return $this
     */
    public function setDnsConfigNameServers(array $DnsConfigNameServers)
    {
        $this->requestParameters['DnsConfigNameServers'] = $DnsConfigNameServers;
        foreach ($DnsConfigNameServers as $i => $iValue) {
            $this->queryParameters['DnsConfig.NameServer.' . ($i + 1)] = $iValue;
        }
        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        return $this;
    }

    /**
     * @param string $restartPolicy
     *
     * @return $this
     */
    public function setRestartPolicy($restartPolicy)
    {
        $this->requestParameters['RestartPolicy'] = $restartPolicy;
        $this->queryParameters['RestartPolicy'] = $restartPolicy;
        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;
        return $this;
    }

    /**
     * @param array $DnsConfigOptions
     *
     * @return $this
     */
    public function setDnsConfigOptions(array $DnsConfigOptions)
    {
        $this->requestParameters['DnsConfigOptions'] = $DnsConfigOptions;
        foreach ($DnsConfigOptions as $i => $iValue) {
            $this->queryParameters['DnsConfig.Option.' . ($i + 1) . '.Name'] = $DnsConfigOptions[$i]['Name'];
            $this->queryParameters['DnsConfig.Option.' . ($i + 1) . '.Value'] = $DnsConfigOptions[$i]['Value'];
        }
        return $this;
    }

    /**
     * @param string $cpu
     *
     * @return $this
     */
    public function setCpu($cpu)
    {
        $this->requestParameters['Cpu'] = $cpu;
        $this->queryParameters['Cpu'] = $cpu;
        return $this;
    }

    /**
     * @param array $DnsConfigSearchs
     *
     * @return $this
     */
    public function setDnsConfigSearchs(array $DnsConfigSearchs)
    {
        $this->requestParameters['DnsConfigSearchs'] = $DnsConfigSearchs;
        foreach ($DnsConfigSearchs as $i => $iValue) {
            $this->queryParameters['DnsConfig.Search.' . ($i + 1)] = $iValue;
        }
        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;
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
     * @param array $Volumes
     *
     * @return $this
     */
    public function setVolumes(array $Volumes)
    {
        $this->requestParameters['Volumes'] = $Volumes;
        foreach ($Volumes as $i => $iValue) {
            $this->queryParameters['Volume.' . ($i + 1) . '.Name'] = $Volumes[$i]['Name'];
            $this->queryParameters['Volume.' . ($i + 1) . '.NFSVolume.Server'] = $Volumes[$i]['NFSVolume.Server'];
            $this->queryParameters['Volume.' . ($i + 1) . '.NFSVolume.Path'] = $Volumes[$i]['NFSVolume.Path'];
            $this->queryParameters['Volume.' . ($i + 1) . '.NFSVolume.ReadOnly'] = $Volumes[$i]['NFSVolume.ReadOnly'];

            foreach ($Volumes[$i]['ConfigFileVolume.ConfigFileToPaths'] as $j => $jValue) {
                $this->queryParameters['Volume.' . ($i + 1) . '.ConfigFileVolume.ConfigFileToPath.' . ($j + 1)] = $jValue;
            }
            $this->queryParameters['Volume.' . ($i + 1) . '.Type'] = $Volumes[$i]['Type'];
        }
        return $this;
    }

    /**
     * @param string $containerGroupName
     *
     * @return $this
     */
    public function setContainerGroupName($containerGroupName)
    {
        $this->requestParameters['ContainerGroupName'] = $containerGroupName;
        $this->queryParameters['ContainerGroupName'] = $containerGroupName;
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
