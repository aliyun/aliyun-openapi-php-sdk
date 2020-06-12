<?php

namespace Airec\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteDataSet
 *
 * @method string getVersionId()
 * @method string getInstanceId()
 */
class DeleteDataSetRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]';

    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Airec',
            '2018-10-12',
            'DeleteDataSet',
            'airec'
        );
    }

    /**
     * @param string $versionId
     *
     * @return $this
     */
    public function setVersionId($versionId)
    {
        $this->requestParameters['VersionId'] = $versionId;
        $this->pathParameters['VersionId'] = $versionId;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->pathParameters['InstanceId'] = $instanceId;

        return $this;
    }
}
