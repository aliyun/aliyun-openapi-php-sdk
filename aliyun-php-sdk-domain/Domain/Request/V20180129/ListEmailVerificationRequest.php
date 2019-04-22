<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListEmailVerification
 *
 * @method string getBeginCreateTime()
 * @method string getEndCreateTime()
 * @method string getPageSize()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getPageNum()
 * @method string getEmail()
 * @method string getVerificationStatus()
 */
class ListEmailVerificationRequest extends \RpcAcsRequest
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
            'ListEmailVerification'
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
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->requestParameters['Email'] = $email;
        $this->queryParameters['Email'] = $email;

        return $this;
    }

    /**
     * @param string $verificationStatus
     *
     * @return $this
     */
    public function setVerificationStatus($verificationStatus)
    {
        $this->requestParameters['VerificationStatus'] = $verificationStatus;
        $this->queryParameters['VerificationStatus'] = $verificationStatus;

        return $this;
    }
}
