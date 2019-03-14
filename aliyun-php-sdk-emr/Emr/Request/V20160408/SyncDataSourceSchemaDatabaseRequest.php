<?php

namespace Emr\Request\V20160408;

/**
 * Request of SyncDataSourceSchemaDatabase
 *
 * @method string getResourceOwnerId()
 * @method string getDbName()
 * @method string getEtlJobId()
 * @method string getDataSourceId()
 */
class SyncDataSourceSchemaDatabaseRequest extends \RpcAcsRequest
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
            'SyncDataSourceSchemaDatabase',
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
     * @param string $etlJobId
     *
     * @return $this
     */
    public function setEtlJobId($etlJobId)
    {
        $this->requestParameters['EtlJobId'] = $etlJobId;
        $this->queryParameters['EtlJobId'] = $etlJobId;

        return $this;
    }

    /**
     * @param string $dataSourceId
     *
     * @return $this
     */
    public function setDataSourceId($dataSourceId)
    {
        $this->requestParameters['DataSourceId'] = $dataSourceId;
        $this->queryParameters['DataSourceId'] = $dataSourceId;

        return $this;
    }
}
