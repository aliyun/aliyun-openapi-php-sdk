<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListJobs
 *
 * @method string getOwner()
 * @method string getPageSize()
 * @method string getClusterId()
 * @method string getState()
 * @method string getRerunable()
 * @method string getPageNumber()
 */
class ListJobsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'ListJobs',
            'ehs'
        );
    }

    /**
     * @param string $owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->requestParameters['Owner'] = $owner;
        $this->queryParameters['Owner'] = $owner;

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
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->requestParameters['State'] = $state;
        $this->queryParameters['State'] = $state;

        return $this;
    }

    /**
     * @param string $rerunable
     *
     * @return $this
     */
    public function setRerunable($rerunable)
    {
        $this->requestParameters['Rerunable'] = $rerunable;
        $this->queryParameters['Rerunable'] = $rerunable;

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
