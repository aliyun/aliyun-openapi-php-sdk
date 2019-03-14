<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListClusterHostComponent
 *
 * @method string getResourceOwnerId()
 * @method string getHostName()
 * @method string getHostInstanceId()
 * @method string getPageSize()
 * @method string getComponentName()
 * @method string getServiceName()
 * @method string getClusterId()
 * @method string getHostRole()
 * @method string getPageNumber()
 * @method string getComponentStatus()
 */
class ListClusterHostComponentRequest extends \RpcAcsRequest
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
            'ListClusterHostComponent',
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
     * @param string $serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->requestParameters['ServiceName'] = $serviceName;
        $this->queryParameters['ServiceName'] = $serviceName;

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
     * @param string $hostRole
     *
     * @return $this
     */
    public function setHostRole($hostRole)
    {
        $this->requestParameters['HostRole'] = $hostRole;
        $this->queryParameters['HostRole'] = $hostRole;

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
     * @param string $componentStatus
     *
     * @return $this
     */
    public function setComponentStatus($componentStatus)
    {
        $this->requestParameters['ComponentStatus'] = $componentStatus;
        $this->queryParameters['ComponentStatus'] = $componentStatus;

        return $this;
    }
}
