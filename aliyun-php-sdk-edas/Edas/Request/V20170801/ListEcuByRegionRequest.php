<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListEcuByRegion
 *
 * @method string getAct()
 * @method string getLogicalRegionId()
 */
class ListEcuByRegionRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/ecu_list';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'ListEcuByRegion'
        );
    }

    /**
     * @param string $act
     *
     * @return $this
     */
    public function setAct($act)
    {
        $this->requestParameters['Act'] = $act;
        $this->queryParameters['Act'] = $act;

        return $this;
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
}
