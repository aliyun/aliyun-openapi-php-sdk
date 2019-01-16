<?php

namespace CCC\Request\V20170705;

/**
 * Request of ListSkillGroupSummaryReportsSinceMidnight
 *
 * @method string getInstanceId()
 * @method string getSkillGroups()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class ListSkillGroupSummaryReportsSinceMidnightRequest extends \RpcAcsRequest
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
            'ListSkillGroupSummaryReportsSinceMidnight'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $skillGroups
     *
     * @return $this
     */
    public function setSkillGroups($skillGroups)
    {
        $this->requestParameters['SkillGroups'] = $skillGroups;
        $this->queryParameters['SkillGroups'] = $skillGroups;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
