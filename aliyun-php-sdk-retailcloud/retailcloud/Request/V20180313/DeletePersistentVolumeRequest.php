<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeletePersistentVolume
 *
 * @method string getPersistentVolumeName()
 * @method string getClusterInstanceId()
 */
class DeletePersistentVolumeRequest extends \RpcAcsRequest
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
            'DeletePersistentVolume',
            'retailcloud'
        );
    }

    /**
     * @param string $persistentVolumeName
     *
     * @return $this
     */
    public function setPersistentVolumeName($persistentVolumeName)
    {
        $this->requestParameters['PersistentVolumeName'] = $persistentVolumeName;
        $this->queryParameters['PersistentVolumeName'] = $persistentVolumeName;

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
}
