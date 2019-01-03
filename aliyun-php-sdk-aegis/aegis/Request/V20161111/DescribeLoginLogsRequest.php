<?php

namespace aegis\Request\V20161111;

/**
 * Request of DescribeLoginLogs
 *
 * @method string getTypes()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getStatuses()
 * @method string getCurrentPage()
 * @method string getRemark()
 * @method string getTag()
 */
class DescribeLoginLogsRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'DescribeLoginLogs',
            'vipaegis'
        );
    }

    /**
     * @param string $types
     *
     * @return $this
     */
    public function setTypes($types)
    {
        $this->requestParameters['Types'] = $types;
        $this->queryParameters['Types'] = $types;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

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
     * @param string $statuses
     *
     * @return $this
     */
    public function setStatuses($statuses)
    {
        $this->requestParameters['Statuses'] = $statuses;
        $this->queryParameters['Statuses'] = $statuses;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->requestParameters['Remark'] = $remark;
        $this->queryParameters['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->requestParameters['Tag'] = $tag;
        $this->queryParameters['Tag'] = $tag;

        return $this;
    }
}
