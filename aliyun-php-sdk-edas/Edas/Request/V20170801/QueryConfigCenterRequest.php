<?php

namespace Edas\Request\V20170801;

/**
 * Request of QueryConfigCenter
 *
 * @method string getDataId()
 * @method string getLogicalRegionId()
 * @method string getGroup()
 */
class QueryConfigCenterRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/configCenter';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'QueryConfigCenter'
        );
    }

    /**
     * @param string $dataId
     *
     * @return $this
     */
    public function setDataId($dataId)
    {
        $this->requestParameters['DataId'] = $dataId;
        $this->queryParameters['DataId'] = $dataId;

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
