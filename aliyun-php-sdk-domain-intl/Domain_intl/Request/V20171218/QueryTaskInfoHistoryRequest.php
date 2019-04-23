<?php

namespace Domain_intl\Request\V20171218;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryTaskInfoHistory
 *
 * @method string getBeginCreateTime()
 * @method string getEndCreateTime()
 * @method string getTaskNoCursor()
 * @method string getUserClientIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getCreateTimeCursor()
 */
class QueryTaskInfoHistoryRequest extends \RpcAcsRequest
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
            'Domain-intl',
            '2017-12-18',
            'QueryTaskInfoHistory',
            'domain'
        );
    }

    /**
     * @param string $beginCreateTime
     *
     * @return $this
     */
    public function setBeginCreateTime($beginCreateTime)
    {
        $this->requestParameters['BeginCreateTime'] = $beginCreateTime;
        $this->queryParameters['BeginCreateTime'] = $beginCreateTime;

        return $this;
    }

    /**
     * @param string $endCreateTime
     *
     * @return $this
     */
    public function setEndCreateTime($endCreateTime)
    {
        $this->requestParameters['EndCreateTime'] = $endCreateTime;
        $this->queryParameters['EndCreateTime'] = $endCreateTime;

        return $this;
    }

    /**
     * @param string $taskNoCursor
     *
     * @return $this
     */
    public function setTaskNoCursor($taskNoCursor)
    {
        $this->requestParameters['TaskNoCursor'] = $taskNoCursor;
        $this->queryParameters['TaskNoCursor'] = $taskNoCursor;

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
     * @param string $createTimeCursor
     *
     * @return $this
     */
    public function setCreateTimeCursor($createTimeCursor)
    {
        $this->requestParameters['CreateTimeCursor'] = $createTimeCursor;
        $this->queryParameters['CreateTimeCursor'] = $createTimeCursor;

        return $this;
    }
}
