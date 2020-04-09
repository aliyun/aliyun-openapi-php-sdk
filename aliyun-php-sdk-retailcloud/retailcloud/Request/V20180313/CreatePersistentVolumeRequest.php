<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreatePersistentVolume
 *
 * @method string getReclaimPolicy()
 * @method string getNFSVersion()
 * @method string getAccessModes()
 * @method string getName()
 * @method string getMountTargetDomain()
 * @method string getMountDir()
 * @method string getClusterInstanceId()
 * @method string getCapacity()
 * @method string getStorageClass()
 */
class CreatePersistentVolumeRequest extends \RpcAcsRequest
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
            'CreatePersistentVolume',
            'retailcloud'
        );
    }

    /**
     * @param string $reclaimPolicy
     *
     * @return $this
     */
    public function setReclaimPolicy($reclaimPolicy)
    {
        $this->requestParameters['ReclaimPolicy'] = $reclaimPolicy;
        $this->queryParameters['ReclaimPolicy'] = $reclaimPolicy;

        return $this;
    }

    /**
     * @param string $nFSVersion
     *
     * @return $this
     */
    public function setNFSVersion($nFSVersion)
    {
        $this->requestParameters['NFSVersion'] = $nFSVersion;
        $this->queryParameters['NFSVersion'] = $nFSVersion;

        return $this;
    }

    /**
     * @param string $accessModes
     *
     * @return $this
     */
    public function setAccessModes($accessModes)
    {
        $this->requestParameters['AccessModes'] = $accessModes;
        $this->queryParameters['AccessModes'] = $accessModes;

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
     * @param string $mountTargetDomain
     *
     * @return $this
     */
    public function setMountTargetDomain($mountTargetDomain)
    {
        $this->requestParameters['MountTargetDomain'] = $mountTargetDomain;
        $this->queryParameters['MountTargetDomain'] = $mountTargetDomain;

        return $this;
    }

    /**
     * @param string $mountDir
     *
     * @return $this
     */
    public function setMountDir($mountDir)
    {
        $this->requestParameters['MountDir'] = $mountDir;
        $this->queryParameters['MountDir'] = $mountDir;

        return $this;
    }

    /**
     * @param string $clusterInstanceId
     *
     * @return $this
     */
    public function setClusterInstanceId($clusterInstanceId)
    {
        $this->requestParameters['ClusterInstanceId'] = $clusterInstanceId;
        $this->queryParameters['ClusterInstanceId'] = $clusterInstanceId;

        return $this;
    }

    /**
     * @param string $capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->requestParameters['Capacity'] = $capacity;
        $this->queryParameters['Capacity'] = $capacity;

        return $this;
    }

    /**
     * @param string $storageClass
     *
     * @return $this
     */
    public function setStorageClass($storageClass)
    {
        $this->requestParameters['StorageClass'] = $storageClass;
        $this->queryParameters['StorageClass'] = $storageClass;

        return $this;
    }
}
