<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListClusterHost
 *
 * @method string getResourceOwnerId()
 * @method string getHostInstanceId()
 * @method array getStatusLists()
 * @method string getPrivateIp()
 * @method string getComponentName()
 * @method string getPublicIp()
 * @method string getClusterId()
 * @method string getPageNumber()
 * @method string getHostName()
 * @method string getGroupType()
 * @method string getHostGroupId()
 * @method string getPageSize()
 */
class ListClusterHostRequest extends \RpcAcsRequest
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
            'ListClusterHost',
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
     * @param string $hostInstanceId
     *
     * @return $this
     */
    public function setHostInstanceId($hostInstanceId)
    {
        $this->requestParameters['HostInstanceId'] = $hostInstanceId;
        $this->queryParameters['HostInstanceId'] = $hostInstanceId;

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
     * @param string $privateIp
     *
     * @return $this
     */
    public function setPrivateIp($privateIp)
    {
        $this->requestParameters['PrivateIp'] = $privateIp;
        $this->queryParameters['PrivateIp'] = $privateIp;

        return $this;
    }

    /**
     * @param string $componentName
     *
     * @return $this
     */
    public function setComponentName($componentName)
    {
        $this->requestParameters['ComponentName'] = $componentName;
        $this->queryParameters['ComponentName'] = $componentName;

        return $this;
    }

    /**
     * @param string $publicIp
     *
     * @return $this
     */
    public function setPublicIp($publicIp)
    {
        $this->requestParameters['PublicIp'] = $publicIp;
        $this->queryParameters['PublicIp'] = $publicIp;

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
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        $this->requestParameters['HostName'] = $hostName;
        $this->queryParameters['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $groupType
     *
     * @return $this
     */
    public function setGroupType($groupType)
    {
        $this->requestParameters['GroupType'] = $groupType;
        $this->queryParameters['GroupType'] = $groupType;

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
}
