<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateMonitorGroup
 *
 * @method string getContactGroups()
 * @method string getOptions()
 * @method string getType()
 * @method string getServiceId()
 * @method string getGroupName()
 * @method string getBindUrl()
 */
class CreateMonitorGroupRequest extends \RpcAcsRequest
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
            'CreateMonitorGroup',
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
     * @param string $options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->requestParameters['Options'] = $options;
        $this->queryParameters['Options'] = $options;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

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
     * @param string $bindUrl
     *
     * @return $this
     */
    public function setBindUrl($bindUrl)
    {
        $this->requestParameters['BindUrl'] = $bindUrl;
        $this->queryParameters['BindUrl'] = $bindUrl;

        return $this;
    }
}
