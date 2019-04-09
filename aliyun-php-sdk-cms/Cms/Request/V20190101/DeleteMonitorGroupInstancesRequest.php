<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteMonitorGroupInstances
 *
 * @method string getInstanceIdList()
 * @method string getGroupId()
 * @method string getCategory()
 */
class DeleteMonitorGroupInstancesRequest extends \RpcAcsRequest
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
            'DeleteMonitorGroupInstances',
            'cms'
        );
    }

    /**
     * @param string $instanceIdList
     *
     * @return $this
     */
    public function setInstanceIdList($instanceIdList)
    {
        $this->requestParameters['InstanceIdList'] = $instanceIdList;
        $this->queryParameters['InstanceIdList'] = $instanceIdList;

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

    /**
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->requestParameters['Category'] = $category;
        $this->queryParameters['Category'] = $category;

        return $this;
    }
}
