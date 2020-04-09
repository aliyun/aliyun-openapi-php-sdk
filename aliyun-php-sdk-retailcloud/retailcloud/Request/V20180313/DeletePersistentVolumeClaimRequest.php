<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeletePersistentVolumeClaim
 *
 * @method string getPersistentVolumeClaimName()
 * @method string getAppId()
 * @method string getEnvId()
 */
class DeletePersistentVolumeClaimRequest extends \RpcAcsRequest
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
            'DeletePersistentVolumeClaim',
            'retailcloud'
        );
    }

    /**
     * @param string $persistentVolumeClaimName
     *
     * @return $this
     */
    public function setPersistentVolumeClaimName($persistentVolumeClaimName)
    {
        $this->requestParameters['PersistentVolumeClaimName'] = $persistentVolumeClaimName;
        $this->queryParameters['PersistentVolumeClaimName'] = $persistentVolumeClaimName;

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
}
