<?php

namespace Airec\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpgradeInstance
 *
 * @method string getInstanceId()
 */
class UpgradeInstanceRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/openapi/instances/[InstanceId]/actions/upgrade';

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
            'Airec',
            '2018-10-12',
            'UpgradeInstance',
            'airec'
        );
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
