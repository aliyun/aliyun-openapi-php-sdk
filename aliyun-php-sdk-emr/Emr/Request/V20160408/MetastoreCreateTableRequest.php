<?php

namespace Emr\Request\V20160408;

/**
 * Request of MetastoreCreateTable
 *
 * @method string getResourceOwnerId()
 * @method string getFieldDelimiter()
 * @method array getColumns()
 * @method string getCreateWith()
 * @method array getPartitions()
 * @method string getDbName()
 * @method string getCreateSql()
 * @method string getComment()
 * @method string getLocationUri()
 * @method string getTableName()
 * @method string getDatabaseId()
 */
class MetastoreCreateTableRequest extends \RpcAcsRequest
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
            'MetastoreCreateTable',
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
     * @param string $fieldDelimiter
     *
     * @return $this
     */
    public function setFieldDelimiter($fieldDelimiter)
    {
        $this->requestParameters['FieldDelimiter'] = $fieldDelimiter;
        $this->queryParameters['FieldDelimiter'] = $fieldDelimiter;

        return $this;
    }

    /**
     * @param array $columns
     *
     * @return $this
     */
    public function setColumns(array $columns)
    {
        $this->requestParameters['Columns'] = $columns;
        foreach ($columns as $i => $iValue) {
            $this->queryParameters['Column.' . ($i + 1) . '.Name'] = $columns[$i]['Name'];
            $this->queryParameters['Column.' . ($i + 1) . '.Comment'] = $columns[$i]['Comment'];
            $this->queryParameters['Column.' . ($i + 1) . '.Type'] = $columns[$i]['Type'];
        }

        return $this;
    }

    /**
     * @param string $createWith
     *
     * @return $this
     */
    public function setCreateWith($createWith)
    {
        $this->requestParameters['CreateWith'] = $createWith;
        $this->queryParameters['CreateWith'] = $createWith;

        return $this;
    }

    /**
     * @param array $partitions
     *
     * @return $this
     */
    public function setPartitions(array $partitions)
    {
        $this->requestParameters['Partitions'] = $partitions;
        foreach ($partitions as $i => $iValue) {
            $this->queryParameters['Partition.' . ($i + 1) . '.Name'] = $partitions[$i]['Name'];
            $this->queryParameters['Partition.' . ($i + 1) . '.Comment'] = $partitions[$i]['Comment'];
            $this->queryParameters['Partition.' . ($i + 1) . '.Type'] = $partitions[$i]['Type'];
        }

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
     * @param string $createSql
     *
     * @return $this
     */
    public function setCreateSql($createSql)
    {
        $this->requestParameters['CreateSql'] = $createSql;
        $this->queryParameters['CreateSql'] = $createSql;

        return $this;
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->requestParameters['Comment'] = $comment;
        $this->queryParameters['Comment'] = $comment;

        return $this;
    }

    /**
     * @param string $locationUri
     *
     * @return $this
     */
    public function setLocationUri($locationUri)
    {
        $this->requestParameters['LocationUri'] = $locationUri;
        $this->queryParameters['LocationUri'] = $locationUri;

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
