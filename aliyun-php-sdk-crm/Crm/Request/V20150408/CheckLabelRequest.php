<?php

namespace Crm\Request\V20150408;

/**
 * Request of CheckLabel
 *
 * @method string getLabelSeries()
 * @method string getPK()
 * @method string getLabelName()
 */
class CheckLabelRequest extends \RpcAcsRequest
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
            'CheckLabel',
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
     * @param string $labelName
     *
     * @return $this
     */
    public function setLabelName($labelName)
    {
        $this->requestParameters['LabelName'] = $labelName;
        $this->queryParameters['LabelName'] = $labelName;

        return $this;
    }
}
