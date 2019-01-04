<?php

namespace NAS\Request\V20170626;

/**
 * Request of DescribeAccessRules
 *
 * @method string getPageSize()
 * @method string getAccessGroupName()
 * @method string getAccessRuleId()
 * @method string getPageNumber()
 */
class DescribeAccessRulesRequest extends \RpcAcsRequest
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
            'NAS',
            '2017-06-26',
            'DescribeAccessRules',
            'nas'
        );
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
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function setAccessGroupName($accessGroupName)
    {
        $this->requestParameters['AccessGroupName'] = $accessGroupName;
        $this->queryParameters['AccessGroupName'] = $accessGroupName;

        return $this;
    }

    /**
     * @param string $accessRuleId
     *
     * @return $this
     */
    public function setAccessRuleId($accessRuleId)
    {
        $this->requestParameters['AccessRuleId'] = $accessRuleId;
        $this->queryParameters['AccessRuleId'] = $accessRuleId;

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
