<?php

namespace Iot\Request\V20180120;

/**
 * Request of QueryDeviceGroupList
 *
 * @method string getSuperGroupId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getGroupName()
 */
class QueryDeviceGroupListRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'QueryDeviceGroupList'
        );
    }

    /**
     * @param string $superGroupId
     *
     * @return $this
     */
    public function setSuperGroupId($superGroupId)
    {
        $this->requestParameters['SuperGroupId'] = $superGroupId;
        $this->queryParameters['SuperGroupId'] = $superGroupId;

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
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

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
}
