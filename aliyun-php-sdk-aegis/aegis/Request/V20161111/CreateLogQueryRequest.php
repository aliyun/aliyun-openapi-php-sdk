<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateLogQuery
 *
 * @method string getSourceIp()
 * @method string getQueryName()
 * @method string getConditions()
 * @method string getQueryDetail()
 */
class CreateLogQueryRequest extends \RpcAcsRequest
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
            'CreateLogQuery',
            'vipaegis'
        );
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
     * @param string $queryName
     *
     * @return $this
     */
    public function setQueryName($queryName)
    {
        $this->requestParameters['QueryName'] = $queryName;
        $this->queryParameters['QueryName'] = $queryName;

        return $this;
    }

    /**
     * @param string $conditions
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->requestParameters['Conditions'] = $conditions;
        $this->queryParameters['Conditions'] = $conditions;

        return $this;
    }

    /**
     * @param string $queryDetail
     *
     * @return $this
     */
    public function setQueryDetail($queryDetail)
    {
        $this->requestParameters['QueryDetail'] = $queryDetail;
        $this->queryParameters['QueryDetail'] = $queryDetail;

        return $this;
    }
}
