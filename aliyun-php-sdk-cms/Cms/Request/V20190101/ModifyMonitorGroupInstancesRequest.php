<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyMonitorGroupInstances
 *
 * @method array getInstancess()
 * @method string getGroupId()
 */
class ModifyMonitorGroupInstancesRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'ModifyMonitorGroupInstances',
            'cms'
        );
    }

    /**
     * @param array $instances
     *
     * @return $this
     */
    public function setInstancess(array $instances)
    {
        $this->requestParameters['Instancess'] = $instances;
        foreach ($instances as $depth1 => $depth1Value) {
            $this->queryParameters['Instances.' . ($depth1 + 1) . '.InstanceId'] = $depth1Value['InstanceId'];
            $this->queryParameters['Instances.' . ($depth1 + 1) . '.InstanceName'] = $depth1Value['InstanceName'];
            $this->queryParameters['Instances.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
            $this->queryParameters['Instances.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
        }

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }
}
