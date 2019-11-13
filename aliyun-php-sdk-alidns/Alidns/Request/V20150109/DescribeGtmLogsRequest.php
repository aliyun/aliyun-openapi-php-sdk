<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeGtmLogs
 *
 * @method string getStartTimestamp()
 * @method string getPageNumber()
 * @method string getEndTimestamp()
 * @method string getInstanceId()
 * @method string getUserClientIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getKeyword()
 */
class DescribeGtmLogsRequest extends \RpcAcsRequest
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
            'Alidns',
            '2015-01-09',
            'DescribeGtmLogs',
            'alidns'
        );
    }

    /**
     * @param string $startTimestamp
     *
     * @return $this
     */
    public function setStartTimestamp($startTimestamp)
    {
        $this->requestParameters['StartTimestamp'] = $startTimestamp;
        $this->queryParameters['StartTimestamp'] = $startTimestamp;

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

    /**
     * @param string $endTimestamp
     *
     * @return $this
     */
    public function setEndTimestamp($endTimestamp)
    {
        $this->requestParameters['EndTimestamp'] = $endTimestamp;
        $this->queryParameters['EndTimestamp'] = $endTimestamp;

        return $this;
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
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

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
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->requestParameters['Keyword'] = $keyword;
        $this->queryParameters['Keyword'] = $keyword;

        return $this;
    }
}
