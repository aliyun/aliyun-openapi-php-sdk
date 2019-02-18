<?php

namespace Edas\Request\V20170801;

/**
 * Request of QueryMigrateRegionList
 *
 * @method string getLogicalRegionId()
 */
class QueryMigrateRegionListRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/migrate_region_select';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'QueryMigrateRegionList'
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
}
