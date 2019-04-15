<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOrUpdateDataSource
 *
 * @method string getProjectName()
 * @method string getSourceIp()
 * @method string getLogStoreName()
 * @method string getDatasourceDescription()
 * @method string getFields()
 * @method string getRegionNo()
 */
class CreateOrUpdateDataSourceRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'CreateOrUpdateDataSource',
            'vipaegis'
        );
    }

    /**
     * @param string $projectName
     *
     * @return $this
     */
    public function setProjectName($projectName)
    {
        $this->requestParameters['ProjectName'] = $projectName;
        $this->queryParameters['ProjectName'] = $projectName;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $logStoreName
     *
     * @return $this
     */
    public function setLogStoreName($logStoreName)
    {
        $this->requestParameters['LogStoreName'] = $logStoreName;
        $this->queryParameters['LogStoreName'] = $logStoreName;

        return $this;
    }

    /**
     * @param string $datasourceDescription
     *
     * @return $this
     */
    public function setDatasourceDescription($datasourceDescription)
    {
        $this->requestParameters['DatasourceDescription'] = $datasourceDescription;
        $this->queryParameters['DatasourceDescription'] = $datasourceDescription;

        return $this;
    }

    /**
     * @param string $fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->requestParameters['Fields'] = $fields;
        $this->queryParameters['Fields'] = $fields;

        return $this;
    }

    /**
     * @param string $regionNo
     *
     * @return $this
     */
    public function setRegionNo($regionNo)
    {
        $this->requestParameters['RegionNo'] = $regionNo;
        $this->queryParameters['RegionNo'] = $regionNo;

        return $this;
    }
}
