<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListConfigCenters
 *
 * @method string getLogicalRegionId()
 * @method string getDataIdPattern()
 * @method string getGroup()
 */
class ListConfigCentersRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/configCenters';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'ListConfigCenters'
        );
    }

    /**
     * @param string $logicalRegionId
     *
     * @return $this
     */
    public function setLogicalRegionId($logicalRegionId)
    {
        $this->requestParameters['LogicalRegionId'] = $logicalRegionId;
        $this->queryParameters['LogicalRegionId'] = $logicalRegionId;

        return $this;
    }

    /**
     * @param string $dataIdPattern
     *
     * @return $this
     */
    public function setDataIdPattern($dataIdPattern)
    {
        $this->requestParameters['DataIdPattern'] = $dataIdPattern;
        $this->queryParameters['DataIdPattern'] = $dataIdPattern;

        return $this;
    }

    /**
     * @param string $group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->requestParameters['Group'] = $group;
        $this->queryParameters['Group'] = $group;

        return $this;
    }
}
