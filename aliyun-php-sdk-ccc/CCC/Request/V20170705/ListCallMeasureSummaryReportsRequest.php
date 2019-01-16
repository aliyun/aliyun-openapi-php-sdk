<?php

namespace CCC\Request\V20170705;

/**
 * Request of ListCallMeasureSummaryReports
 *
 * @method string getIntervalType()
 */
class ListCallMeasureSummaryReportsRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'ListCallMeasureSummaryReports'
        );
    }

    /**
     * @param string $intervalType
     *
     * @return $this
     */
    public function setIntervalType($intervalType)
    {
        $this->requestParameters['IntervalType'] = $intervalType;
        $this->queryParameters['IntervalType'] = $intervalType;

        return $this;
    }
}
