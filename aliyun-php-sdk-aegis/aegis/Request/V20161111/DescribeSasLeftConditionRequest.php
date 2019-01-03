<?php

namespace aegis\Request\V20161111;

/**
 * Request of DescribeSasLeftCondition
 *
 * @method string getSourceIp()
 * @method string getConditionType()
 * @method string getLang()
 * @method string getFilterConditions()
 */
class DescribeSasLeftConditionRequest extends \RpcAcsRequest
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
            'DescribeSasLeftCondition',
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
     * @param string $conditionType
     *
     * @return $this
     */
    public function setConditionType($conditionType)
    {
        $this->requestParameters['ConditionType'] = $conditionType;
        $this->queryParameters['ConditionType'] = $conditionType;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

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
