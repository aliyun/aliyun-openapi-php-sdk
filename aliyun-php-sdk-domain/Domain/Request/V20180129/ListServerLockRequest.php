<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListServerLock
 *
 * @method string getLockProductId()
 * @method string getEndStartDate()
 * @method string getServerLockStatus()
 * @method string getStartExpireDate()
 * @method string getDomainName()
 * @method string getPageSize()
 * @method string getUserClientIp()
 * @method string getEndExpireDate()
 * @method string getPageNum()
 * @method string getLang()
 * @method string getBeginStartDate()
 */
class ListServerLockRequest extends \RpcAcsRequest
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
            'Domain',
            '2018-01-29',
            'ListServerLock'
        );
    }

    /**
     * @param string $lockProductId
     *
     * @return $this
     */
    public function setLockProductId($lockProductId)
    {
        $this->requestParameters['LockProductId'] = $lockProductId;
        $this->queryParameters['LockProductId'] = $lockProductId;

        return $this;
    }

    /**
     * @param string $endStartDate
     *
     * @return $this
     */
    public function setEndStartDate($endStartDate)
    {
        $this->requestParameters['EndStartDate'] = $endStartDate;
        $this->queryParameters['EndStartDate'] = $endStartDate;

        return $this;
    }

    /**
     * @param string $serverLockStatus
     *
     * @return $this
     */
    public function setServerLockStatus($serverLockStatus)
    {
        $this->requestParameters['ServerLockStatus'] = $serverLockStatus;
        $this->queryParameters['ServerLockStatus'] = $serverLockStatus;

        return $this;
    }

    /**
     * @param string $startExpireDate
     *
     * @return $this
     */
    public function setStartExpireDate($startExpireDate)
    {
        $this->requestParameters['StartExpireDate'] = $startExpireDate;
        $this->queryParameters['StartExpireDate'] = $startExpireDate;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

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
     * @param string $endExpireDate
     *
     * @return $this
     */
    public function setEndExpireDate($endExpireDate)
    {
        $this->requestParameters['EndExpireDate'] = $endExpireDate;
        $this->queryParameters['EndExpireDate'] = $endExpireDate;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

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
     * @param string $beginStartDate
     *
     * @return $this
     */
    public function setBeginStartDate($beginStartDate)
    {
        $this->requestParameters['BeginStartDate'] = $beginStartDate;
        $this->queryParameters['BeginStartDate'] = $beginStartDate;

        return $this;
    }
}
