<?php

namespace Crm\Request\V20150408;

/**
 * Request of DeleteLabel
 *
 * @method string getLabelSeries()
 * @method string getOrganization()
 * @method string getPK()
 * @method string getLabelName()
 * @method string getUserName()
 */
class DeleteLabelRequest extends \RpcAcsRequest
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
            'DeleteLabel',
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
     * @param string $organization
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->requestParameters['Organization'] = $organization;
        $this->queryParameters['Organization'] = $organization;

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

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->requestParameters['UserName'] = $userName;
        $this->queryParameters['UserName'] = $userName;

        return $this;
    }
}
