<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListTagJobs
 *
 * @method string getMaxKeys()
 * @method string getProject()
 * @method string getCondition()
 * @method string getMarker()
 */
class ListTagJobsRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'ListTagJobs',
            'imm'
        );
    }

    /**
     * @param string $maxKeys
     *
     * @return $this
     */
    public function setMaxKeys($maxKeys)
    {
        $this->requestParameters['MaxKeys'] = $maxKeys;
        $this->queryParameters['MaxKeys'] = $maxKeys;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->requestParameters['Condition'] = $condition;
        $this->queryParameters['Condition'] = $condition;

        return $this;
    }

    /**
     * @param string $marker
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->requestParameters['Marker'] = $marker;
        $this->queryParameters['Marker'] = $marker;

        return $this;
    }
}
