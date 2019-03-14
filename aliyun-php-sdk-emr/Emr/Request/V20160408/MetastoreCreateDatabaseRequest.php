<?php

namespace Emr\Request\V20160408;

/**
 * Request of MetastoreCreateDatabase
 *
 * @method string getDbSource()
 * @method string getResourceOwnerId()
 * @method string getDbName()
 * @method string getDataSourceId()
 * @method string getDescription()
 * @method string getComment()
 * @method string getLocationUri()
 * @method string getClusterBizId()
 */
class MetastoreCreateDatabaseRequest extends \RpcAcsRequest
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
            'MetastoreCreateDatabase',
            'emr'
        );
    }

    /**
     * @param string $dbSource
     *
     * @return $this
     */
    public function setDbSource($dbSource)
    {
        $this->requestParameters['DbSource'] = $dbSource;
        $this->queryParameters['DbSource'] = $dbSource;

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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

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
     * @param string $clusterBizId
     *
     * @return $this
     */
    public function setClusterBizId($clusterBizId)
    {
        $this->requestParameters['ClusterBizId'] = $clusterBizId;
        $this->queryParameters['ClusterBizId'] = $clusterBizId;

        return $this;
    }
}
