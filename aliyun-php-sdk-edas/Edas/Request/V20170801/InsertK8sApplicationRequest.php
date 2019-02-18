<?php

namespace Edas\Request\V20170801;

/**
 * Request of InsertK8sApplication
 *
 * @method string getNasId()
 * @method string getRepoId()
 * @method string getInternetTargetPort()
 * @method string getIntranetSlbId()
 * @method string getCommandArgs()
 * @method string getReadiness()
 * @method string getLiveness()
 * @method string getInternetSlbPort()
 * @method string getEnvs()
 * @method string getRequestsMem()
 * @method string getStorageType()
 * @method string getLimitMem()
 * @method string getAppName()
 * @method string getInternetSlbId()
 * @method string getLogicalRegionId()
 * @method string getInternetSlbProtocol()
 * @method string getIntranetSlbPort()
 * @method string getPreStop()
 * @method string getMountDescs()
 * @method string getReplicas()
 * @method string getLimitCpu()
 * @method string getClusterId()
 * @method string getIntranetTargetPort()
 * @method string getLocalVolume()
 * @method string getCommand()
 * @method string getIntranetSlbProtocol()
 * @method string getImageUrl()
 * @method string getNamespace()
 * @method string getApplicationDescription()
 * @method string getRequestsCpu()
 * @method string getPostStart()
 */
class InsertK8sApplicationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/k8s/acs/create_k8s_app';

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
            'Edas',
            '2017-08-01',
            'InsertK8sApplication'
        );
    }

    /**
     * @param string $nasId
     *
     * @return $this
     */
    public function setNasId($nasId)
    {
        $this->requestParameters['NasId'] = $nasId;
        $this->queryParameters['NasId'] = $nasId;

        return $this;
    }

    /**
     * @param string $repoId
     *
     * @return $this
     */
    public function setRepoId($repoId)
    {
        $this->requestParameters['RepoId'] = $repoId;
        $this->queryParameters['RepoId'] = $repoId;

        return $this;
    }

    /**
     * @param string $internetTargetPort
     *
     * @return $this
     */
    public function setInternetTargetPort($internetTargetPort)
    {
        $this->requestParameters['InternetTargetPort'] = $internetTargetPort;
        $this->queryParameters['InternetTargetPort'] = $internetTargetPort;

        return $this;
    }

    /**
     * @param string $intranetSlbId
     *
     * @return $this
     */
    public function setIntranetSlbId($intranetSlbId)
    {
        $this->requestParameters['IntranetSlbId'] = $intranetSlbId;
        $this->queryParameters['IntranetSlbId'] = $intranetSlbId;

        return $this;
    }

    /**
     * @param string $commandArgs
     *
     * @return $this
     */
    public function setCommandArgs($commandArgs)
    {
        $this->requestParameters['CommandArgs'] = $commandArgs;
        $this->queryParameters['CommandArgs'] = $commandArgs;

        return $this;
    }

    /**
     * @param string $readiness
     *
     * @return $this
     */
    public function setReadiness($readiness)
    {
        $this->requestParameters['Readiness'] = $readiness;
        $this->queryParameters['Readiness'] = $readiness;

        return $this;
    }

    /**
     * @param string $liveness
     *
     * @return $this
     */
    public function setLiveness($liveness)
    {
        $this->requestParameters['Liveness'] = $liveness;
        $this->queryParameters['Liveness'] = $liveness;

        return $this;
    }

    /**
     * @param string $internetSlbPort
     *
     * @return $this
     */
    public function setInternetSlbPort($internetSlbPort)
    {
        $this->requestParameters['InternetSlbPort'] = $internetSlbPort;
        $this->queryParameters['InternetSlbPort'] = $internetSlbPort;

        return $this;
    }

    /**
     * @param string $envs
     *
     * @return $this
     */
    public function setEnvs($envs)
    {
        $this->requestParameters['Envs'] = $envs;
        $this->queryParameters['Envs'] = $envs;

        return $this;
    }

    /**
     * @param string $requestsMem
     *
     * @return $this
     */
    public function setRequestsMem($requestsMem)
    {
        $this->requestParameters['RequestsMem'] = $requestsMem;
        $this->queryParameters['RequestsMem'] = $requestsMem;

        return $this;
    }

    /**
     * @param string $storageType
     *
     * @return $this
     */
    public function setStorageType($storageType)
    {
        $this->requestParameters['StorageType'] = $storageType;
        $this->queryParameters['StorageType'] = $storageType;

        return $this;
    }

    /**
     * @param string $limitMem
     *
     * @return $this
     */
    public function setLimitMem($limitMem)
    {
        $this->requestParameters['LimitMem'] = $limitMem;
        $this->queryParameters['LimitMem'] = $limitMem;

        return $this;
    }

    /**
     * @param string $appName
     *
     * @return $this
     */
    public function setAppName($appName)
    {
        $this->requestParameters['AppName'] = $appName;
        $this->queryParameters['AppName'] = $appName;

        return $this;
    }

    /**
     * @param string $internetSlbId
     *
     * @return $this
     */
    public function setInternetSlbId($internetSlbId)
    {
        $this->requestParameters['InternetSlbId'] = $internetSlbId;
        $this->queryParameters['InternetSlbId'] = $internetSlbId;

        return $this;
    }

    /**
     * @param string $logicalRegionId
     *
     * @return $this
     */
    public function setLogicalRegionId($logicalRegionId)
    {
        $this->requestParameters['LogicalRegionId'] = $logicalRegionId;
        $this->queryParameters['LogicalRegionId'] = $logicalRegionId;

        return $this;
    }

    /**
     * @param string $internetSlbProtocol
     *
     * @return $this
     */
    public function setInternetSlbProtocol($internetSlbProtocol)
    {
        $this->requestParameters['InternetSlbProtocol'] = $internetSlbProtocol;
        $this->queryParameters['InternetSlbProtocol'] = $internetSlbProtocol;

        return $this;
    }

    /**
     * @param string $intranetSlbPort
     *
     * @return $this
     */
    public function setIntranetSlbPort($intranetSlbPort)
    {
        $this->requestParameters['IntranetSlbPort'] = $intranetSlbPort;
        $this->queryParameters['IntranetSlbPort'] = $intranetSlbPort;

        return $this;
    }

    /**
     * @param string $preStop
     *
     * @return $this
     */
    public function setPreStop($preStop)
    {
        $this->requestParameters['PreStop'] = $preStop;
        $this->queryParameters['PreStop'] = $preStop;

        return $this;
    }

    /**
     * @param string $mountDescs
     *
     * @return $this
     */
    public function setMountDescs($mountDescs)
    {
        $this->requestParameters['MountDescs'] = $mountDescs;
        $this->queryParameters['MountDescs'] = $mountDescs;

        return $this;
    }

    /**
     * @param string $replicas
     *
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->requestParameters['Replicas'] = $replicas;
        $this->queryParameters['Replicas'] = $replicas;

        return $this;
    }

    /**
     * @param string $limitCpu
     *
     * @return $this
     */
    public function setLimitCpu($limitCpu)
    {
        $this->requestParameters['LimitCpu'] = $limitCpu;
        $this->queryParameters['LimitCpu'] = $limitCpu;

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
     * @param string $intranetTargetPort
     *
     * @return $this
     */
    public function setIntranetTargetPort($intranetTargetPort)
    {
        $this->requestParameters['IntranetTargetPort'] = $intranetTargetPort;
        $this->queryParameters['IntranetTargetPort'] = $intranetTargetPort;

        return $this;
    }

    /**
     * @param string $localVolume
     *
     * @return $this
     */
    public function setLocalVolume($localVolume)
    {
        $this->requestParameters['LocalVolume'] = $localVolume;
        $this->queryParameters['LocalVolume'] = $localVolume;

        return $this;
    }

    /**
     * @param string $command
     *
     * @return $this
     */
    public function setCommand($command)
    {
        $this->requestParameters['Command'] = $command;
        $this->queryParameters['Command'] = $command;

        return $this;
    }

    /**
     * @param string $intranetSlbProtocol
     *
     * @return $this
     */
    public function setIntranetSlbProtocol($intranetSlbProtocol)
    {
        $this->requestParameters['IntranetSlbProtocol'] = $intranetSlbProtocol;
        $this->queryParameters['IntranetSlbProtocol'] = $intranetSlbProtocol;

        return $this;
    }

    /**
     * @param string $imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->requestParameters['ImageUrl'] = $imageUrl;
        $this->queryParameters['ImageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * @param string $namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->requestParameters['Namespace'] = $namespace;
        $this->queryParameters['Namespace'] = $namespace;

        return $this;
    }

    /**
     * @param string $applicationDescription
     *
     * @return $this
     */
    public function setApplicationDescription($applicationDescription)
    {
        $this->requestParameters['ApplicationDescription'] = $applicationDescription;
        $this->queryParameters['ApplicationDescription'] = $applicationDescription;

        return $this;
    }

    /**
     * @param string $requestsCpu
     *
     * @return $this
     */
    public function setRequestsCpu($requestsCpu)
    {
        $this->requestParameters['RequestsCpu'] = $requestsCpu;
        $this->queryParameters['RequestsCpu'] = $requestsCpu;

        return $this;
    }

    /**
     * @param string $postStart
     *
     * @return $this
     */
    public function setPostStart($postStart)
    {
        $this->requestParameters['PostStart'] = $postStart;
        $this->queryParameters['PostStart'] = $postStart;

        return $this;
    }
}
