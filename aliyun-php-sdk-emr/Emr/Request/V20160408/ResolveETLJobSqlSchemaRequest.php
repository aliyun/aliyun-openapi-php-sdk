<?php

namespace Emr\Request\V20160408;

/**
 * Request of ResolveETLJobSqlSchema
 *
 * @method string getStageName()
 * @method string getResourceOwnerId()
 * @method string getEtlJobId()
 * @method string getDataSourceId()
 * @method string getSql()
 */
class ResolveETLJobSqlSchemaRequest extends \RpcAcsRequest
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
            'ResolveETLJobSqlSchema',
            'emr'
        );
    }

    /**
     * @param string $stageName
     *
     * @return $this
     */
    public function setStageName($stageName)
    {
        $this->requestParameters['StageName'] = $stageName;
        $this->queryParameters['StageName'] = $stageName;

        return $this;
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

    /**
     * @param string $sql
     *
     * @return $this
     */
    public function setSql($sql)
    {
        $this->requestParameters['Sql'] = $sql;
        $this->queryParameters['Sql'] = $sql;

        return $this;
    }
}
