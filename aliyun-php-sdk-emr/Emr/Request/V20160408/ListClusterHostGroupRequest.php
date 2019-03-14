<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListClusterHostGroup
 *
 * @method string getResourceOwnerId()
 * @method array getStatusLists()
 * @method string getHostGroupId()
 * @method string getPageSize()
 * @method string getClusterId()
 * @method string getHostGroupName()
 * @method string getHostGroupType()
 * @method string getPageNumber()
 */
class ListClusterHostGroupRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'ListClusterHostGroup',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param array $statusLists
     *
     * @return $this
     */
    public function setStatusLists(array $statusLists)
    {
        $this->requestParameters['StatusLists'] = $statusLists;
        foreach ($statusLists as $i => $iValue) {
            $this->queryParameters['StatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $hostGroupId
     *
     * @return $this
     */
    public function setHostGroupId($hostGroupId)
    {
        $this->requestParameters['HostGroupId'] = $hostGroupId;
        $this->queryParameters['HostGroupId'] = $hostGroupId;

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
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $hostGroupName
     *
     * @return $this
     */
    public function setHostGroupName($hostGroupName)
    {
        $this->requestParameters['HostGroupName'] = $hostGroupName;
        $this->queryParameters['HostGroupName'] = $hostGroupName;

        return $this;
    }

    /**
     * @param string $hostGroupType
     *
     * @return $this
     */
    public function setHostGroupType($hostGroupType)
    {
        $this->requestParameters['HostGroupType'] = $hostGroupType;
        $this->queryParameters['HostGroupType'] = $hostGroupType;

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
}
