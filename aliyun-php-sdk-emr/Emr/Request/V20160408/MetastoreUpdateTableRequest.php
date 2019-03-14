<?php

namespace Emr\Request\V20160408;

/**
 * Request of MetastoreUpdateTable
 *
 * @method string getResourceOwnerId()
 * @method array getAddColumns()
 * @method array getAddPartitions()
 * @method array getDeleteColumnNames()
 * @method string getTableId()
 * @method array getDeletePartitionNames()
 */
class MetastoreUpdateTableRequest extends \RpcAcsRequest
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
            'MetastoreUpdateTable',
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
     * @param array $addColumns
     *
     * @return $this
     */
    public function setAddColumns(array $addColumns)
    {
        $this->requestParameters['AddColumns'] = $addColumns;
        foreach ($addColumns as $i => $iValue) {
            $this->queryParameters['AddColumn.' . ($i + 1) . '.Name'] = $addColumns[$i]['Name'];
            $this->queryParameters['AddColumn.' . ($i + 1) . '.Comment'] = $addColumns[$i]['Comment'];
            $this->queryParameters['AddColumn.' . ($i + 1) . '.Type'] = $addColumns[$i]['Type'];
        }

        return $this;
    }

    /**
     * @param array $addPartitions
     *
     * @return $this
     */
    public function setAddPartitions(array $addPartitions)
    {
        $this->requestParameters['AddPartitions'] = $addPartitions;
        foreach ($addPartitions as $i => $iValue) {
            $this->queryParameters['AddPartition.' . ($i + 1) . '.Name'] = $addPartitions[$i]['Name'];
            $this->queryParameters['AddPartition.' . ($i + 1) . '.Comment'] = $addPartitions[$i]['Comment'];
            $this->queryParameters['AddPartition.' . ($i + 1) . '.Type'] = $addPartitions[$i]['Type'];
        }

        return $this;
    }

    /**
     * @param array $deleteColumnNames
     *
     * @return $this
     */
    public function setDeleteColumnNames(array $deleteColumnNames)
    {
        $this->requestParameters['DeleteColumnNames'] = $deleteColumnNames;
        foreach ($deleteColumnNames as $i => $iValue) {
            $this->queryParameters['DeleteColumnName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $tableId
     *
     * @return $this
     */
    public function setTableId($tableId)
    {
        $this->requestParameters['TableId'] = $tableId;
        $this->queryParameters['TableId'] = $tableId;

        return $this;
    }

    /**
     * @param array $deletePartitionNames
     *
     * @return $this
     */
    public function setDeletePartitionNames(array $deletePartitionNames)
    {
        $this->requestParameters['DeletePartitionNames'] = $deletePartitionNames;
        foreach ($deletePartitionNames as $i => $iValue) {
            $this->queryParameters['DeletePartitionName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
