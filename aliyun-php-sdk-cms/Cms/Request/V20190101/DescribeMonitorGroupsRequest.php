<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeMonitorGroups
 *
 * @method string getSelectContactGroups()
 * @method string getInstanceId()
 * @method string getPageSize()
 * @method string getType()
 * @method string getKeyword()
 * @method string getGroupName()
 * @method string getPageNumber()
 * @method string getBindUrls()
 */
class DescribeMonitorGroupsRequest extends \RpcAcsRequest
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
            'DescribeMonitorGroups',
            'cms'
        );
    }

    /**
     * @param string $selectContactGroups
     *
     * @return $this
     */
    public function setSelectContactGroups($selectContactGroups)
    {
        $this->requestParameters['SelectContactGroups'] = $selectContactGroups;
        $this->queryParameters['SelectContactGroups'] = $selectContactGroups;

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
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

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
     * @param string $keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->requestParameters['Keyword'] = $keyword;
        $this->queryParameters['Keyword'] = $keyword;

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
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

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
