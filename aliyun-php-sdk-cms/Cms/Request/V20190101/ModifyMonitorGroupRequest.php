<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyMonitorGroup
 *
 * @method string getContactGroups()
 * @method string getGroupId()
 * @method string getServiceId()
 * @method string getGroupName()
 * @method string getBindUrls()
 */
class ModifyMonitorGroupRequest extends \RpcAcsRequest
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
            'ModifyMonitorGroup',
            'cms'
        );
    }

    /**
     * @param string $contactGroups
     *
     * @return $this
     */
    public function setContactGroups($contactGroups)
    {
        $this->requestParameters['ContactGroups'] = $contactGroups;
        $this->queryParameters['ContactGroups'] = $contactGroups;

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
     * @param string $serviceId
     *
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        $this->requestParameters['ServiceId'] = $serviceId;
        $this->queryParameters['ServiceId'] = $serviceId;

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->requestParameters['GroupName'] = $groupName;
        $this->queryParameters['GroupName'] = $groupName;

        return $this;
    }

    /**
     * @param string $bindUrls
     *
     * @return $this
     */
    public function setBindUrls($bindUrls)
    {
        $this->requestParameters['BindUrls'] = $bindUrls;
        $this->queryParameters['BindUrls'] = $bindUrls;

        return $this;
    }
}
