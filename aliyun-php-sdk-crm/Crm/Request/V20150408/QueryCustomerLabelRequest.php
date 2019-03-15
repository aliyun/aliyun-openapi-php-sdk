<?php

namespace Crm\Request\V20150408;

/**
 * Request of QueryCustomerLabel
 *
 * @method string getLabelSeries()
 */
class QueryCustomerLabelRequest extends \RpcAcsRequest
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
            'Crm',
            '2015-04-08',
            'QueryCustomerLabel',
            'crm'
        );
    }

    /**
     * @param string $labelSeries
     *
     * @return $this
     */
    public function setLabelSeries($labelSeries)
    {
        $this->requestParameters['LabelSeries'] = $labelSeries;
        $this->queryParameters['LabelSeries'] = $labelSeries;

        return $this;
    }
}
