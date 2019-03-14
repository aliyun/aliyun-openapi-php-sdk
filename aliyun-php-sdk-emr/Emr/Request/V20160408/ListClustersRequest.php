<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListClusters
 *
 * @method string getResourceOwnerId()
 * @method array getStatusLists()
 * @method string getPageSize()
 * @method array getClusterTypeLists()
 * @method string getIsDesc()
 * @method string getCreateType()
 * @method string getDepositType()
 * @method string getDefaultStatus()
 * @method string getPageNumber()
 */
class ListClustersRequest extends \RpcAcsRequest
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
            'ListClusters',
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
     * @param array $clusterTypeLists
     *
     * @return $this
     */
    public function setClusterTypeLists(array $clusterTypeLists)
    {
        $this->requestParameters['ClusterTypeLists'] = $clusterTypeLists;
        foreach ($clusterTypeLists as $i => $iValue) {
            $this->queryParameters['ClusterTypeList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $isDesc
     *
     * @return $this
     */
    public function setIsDesc($isDesc)
    {
        $this->requestParameters['IsDesc'] = $isDesc;
        $this->queryParameters['IsDesc'] = $isDesc;

        return $this;
    }

    /**
     * @param string $createType
     *
     * @return $this
     */
    public function setCreateType($createType)
    {
        $this->requestParameters['CreateType'] = $createType;
        $this->queryParameters['CreateType'] = $createType;

        return $this;
    }

    /**
     * @param string $depositType
     *
     * @return $this
     */
    public function setDepositType($depositType)
    {
        $this->requestParameters['DepositType'] = $depositType;
        $this->queryParameters['DepositType'] = $depositType;

        return $this;
    }

    /**
     * @param string $defaultStatus
     *
     * @return $this
     */
    public function setDefaultStatus($defaultStatus)
    {
        $this->requestParameters['DefaultStatus'] = $defaultStatus;
        $this->queryParameters['DefaultStatus'] = $defaultStatus;

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
