<?php

namespace Domain_intl\Request\V20171218;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryTransferInList
 *
 * @method string getSubmissionStartDate()
 * @method string getUserClientIp()
 * @method string getSubmissionEndDate()
 * @method string getDomainName()
 * @method string getSimpleTransferInStatus()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getPageNum()
 */
class QueryTransferInListRequest extends \RpcAcsRequest
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
            'QueryTransferInList',
            'domain'
        );
    }

    /**
     * @param string $submissionStartDate
     *
     * @return $this
     */
    public function setSubmissionStartDate($submissionStartDate)
    {
        $this->requestParameters['SubmissionStartDate'] = $submissionStartDate;
        $this->queryParameters['SubmissionStartDate'] = $submissionStartDate;

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
     * @param string $submissionEndDate
     *
     * @return $this
     */
    public function setSubmissionEndDate($submissionEndDate)
    {
        $this->requestParameters['SubmissionEndDate'] = $submissionEndDate;
        $this->queryParameters['SubmissionEndDate'] = $submissionEndDate;

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
     * @param string $simpleTransferInStatus
     *
     * @return $this
     */
    public function setSimpleTransferInStatus($simpleTransferInStatus)
    {
        $this->requestParameters['SimpleTransferInStatus'] = $simpleTransferInStatus;
        $this->queryParameters['SimpleTransferInStatus'] = $simpleTransferInStatus;

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
}
