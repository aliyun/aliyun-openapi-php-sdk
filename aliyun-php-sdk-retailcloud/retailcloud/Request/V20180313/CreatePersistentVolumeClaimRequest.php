<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreatePersistentVolumeClaim
 *
 * @method string getAccessModes()
 * @method string getAppId()
 * @method string getName()
 * @method string getEnvId()
 * @method string getStorageClass()
 * @method string getCapacity()
 */
class CreatePersistentVolumeClaimRequest extends \RpcAcsRequest
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
            'CreatePersistentVolumeClaim',
            'retailcloud'
        );
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
     * @param string $envId
     *
     * @return $this
     */
    public function setEnvId($envId)
    {
        $this->requestParameters['EnvId'] = $envId;
        $this->queryParameters['EnvId'] = $envId;

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
}
