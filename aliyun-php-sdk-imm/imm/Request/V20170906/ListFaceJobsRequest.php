<?php

namespace imm\Request\V20170906;

/**
 * Request of ListFaceJobs
 *
 * @method string getCondition()
 * @method string getMaxKeys()
 * @method string getMarker()
 * @method string getProject()
 */
class ListFaceJobsRequest extends \RpcAcsRequest
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
            'ListFaceJobs',
            'imm'
        );
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
}
