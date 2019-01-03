<?php

namespace aegis\Request\V20161111;

/**
 * Request of ModifySearchCondition
 *
 * @method string getSourceIp()
 * @method string getName()
 * @method string getFilterConditions()
 */
class ModifySearchConditionRequest extends \RpcAcsRequest
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
            'ModifySearchCondition',
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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $filterConditions
     *
     * @return $this
     */
    public function setFilterConditions($filterConditions)
    {
        $this->requestParameters['FilterConditions'] = $filterConditions;
        $this->queryParameters['FilterConditions'] = $filterConditions;

        return $this;
    }
}
