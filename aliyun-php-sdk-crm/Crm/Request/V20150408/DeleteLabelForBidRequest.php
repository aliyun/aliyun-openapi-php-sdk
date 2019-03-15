<?php

namespace Crm\Request\V20150408;

/**
 * Request of DeleteLabelForBid
 *
 * @method string getLabelSeries()
 * @method string getPK()
 * @method string getLabel()
 */
class DeleteLabelForBidRequest extends \RpcAcsRequest
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
            'DeleteLabelForBid',
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

    /**
     * @param string $pK
     *
     * @return $this
     */
    public function setPK($pK)
    {
        $this->requestParameters['PK'] = $pK;
        $this->queryParameters['PK'] = $pK;

        return $this;
    }

    /**
     * @param string $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->requestParameters['Label'] = $label;
        $this->queryParameters['Label'] = $label;

        return $this;
    }
}
