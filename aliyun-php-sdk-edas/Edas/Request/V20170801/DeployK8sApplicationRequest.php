<?php

namespace Edas\Request\V20170801;

/**
 * Request of DeployK8sApplication
 *
 * @method string getMemoryRequest()
 * @method string getNasId()
 * @method string getImage()
 * @method string getPreStop()
 * @method string getMountDescs()
 * @method string getReadiness()
 * @method string getReplicas()
 * @method string getBatchWaitTime()
 * @method string getLiveness()
 * @method string getCpuRequest()
 * @method string getEnvs()
 * @method string getCpuLimit()
 * @method string getLocalVolume()
 * @method string getCommand()
 * @method string getStorageType()
 * @method string getArgs()
 * @method string getAppId()
 * @method string getMemoryLimit()
 * @method string getImageTag()
 * @method string getPostStart()
 */
class DeployK8sApplicationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/k8s/acs/k8s_apps';

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
            'DeployK8sApplication'
        );
    }

    /**
     * @param string $memoryRequest
     *
     * @return $this
     */
    public function setMemoryRequest($memoryRequest)
    {
        $this->requestParameters['MemoryRequest'] = $memoryRequest;
        $this->queryParameters['MemoryRequest'] = $memoryRequest;

        return $this;
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
     * @param string $image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->requestParameters['Image'] = $image;
        $this->queryParameters['Image'] = $image;

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
     * @param string $batchWaitTime
     *
     * @return $this
     */
    public function setBatchWaitTime($batchWaitTime)
    {
        $this->requestParameters['BatchWaitTime'] = $batchWaitTime;
        $this->queryParameters['BatchWaitTime'] = $batchWaitTime;

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
     * @param string $cpuRequest
     *
     * @return $this
     */
    public function setCpuRequest($cpuRequest)
    {
        $this->requestParameters['CpuRequest'] = $cpuRequest;
        $this->queryParameters['CpuRequest'] = $cpuRequest;

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
     * @param string $cpuLimit
     *
     * @return $this
     */
    public function setCpuLimit($cpuLimit)
    {
        $this->requestParameters['CpuLimit'] = $cpuLimit;
        $this->queryParameters['CpuLimit'] = $cpuLimit;

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
     * @param string $args
     *
     * @return $this
     */
    public function setArgs($args)
    {
        $this->requestParameters['Args'] = $args;
        $this->queryParameters['Args'] = $args;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $memoryLimit
     *
     * @return $this
     */
    public function setMemoryLimit($memoryLimit)
    {
        $this->requestParameters['MemoryLimit'] = $memoryLimit;
        $this->queryParameters['MemoryLimit'] = $memoryLimit;

        return $this;
    }

    /**
     * @param string $imageTag
     *
     * @return $this
     */
    public function setImageTag($imageTag)
    {
        $this->requestParameters['ImageTag'] = $imageTag;
        $this->queryParameters['ImageTag'] = $imageTag;

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
