<?php

namespace Emr\Request\V20160408;

/**
 * Request of MetastoreDropTable
 *
 * @method string getResourceOwnerId()
 * @method string getDbName()
 * @method string getTableId()
 * @method string getTableName()
 * @method string getDatabaseId()
 */
class MetastoreDropTableRequest extends \RpcAcsRequest
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
            'MetastoreDropTable',
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
     * @param string $dbName
     *
     * @return $this
     */
    public function setDbName($dbName)
    {
        $this->requestParameters['DbName'] = $dbName;
        $this->queryParameters['DbName'] = $dbName;

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
     * @param string $tableName
     *
     * @return $this
     */
    public function setTableName($tableName)
    {
        $this->requestParameters['TableName'] = $tableName;
        $this->queryParameters['TableName'] = $tableName;

        return $this;
    }

    /**
     * @param string $databaseId
     *
     * @return $this
     */
    public function setDatabaseId($databaseId)
    {
        $this->requestParameters['DatabaseId'] = $databaseId;
        $this->queryParameters['DatabaseId'] = $databaseId;

        return $this;
    }
}
