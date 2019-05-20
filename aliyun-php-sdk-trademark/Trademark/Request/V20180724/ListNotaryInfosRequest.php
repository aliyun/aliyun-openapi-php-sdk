<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListNotaryInfos
 *
 * @method string getBizOrderNo()
 * @method string getNotaryType()
 * @method string getPageSize()
 * @method string getPageNum()
 * @method string getToken()
 */
class ListNotaryInfosRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'ListNotaryInfos',
            'trademark'
        );
    }

    /**
     * @param string $bizOrderNo
     *
     * @return $this
     */
    public function setBizOrderNo($bizOrderNo)
    {
        $this->requestParameters['BizOrderNo'] = $bizOrderNo;
        $this->queryParameters['BizOrderNo'] = $bizOrderNo;

        return $this;
    }

    /**
     * @param string $notaryType
     *
     * @return $this
     */
    public function setNotaryType($notaryType)
    {
        $this->requestParameters['NotaryType'] = $notaryType;
        $this->queryParameters['NotaryType'] = $notaryType;

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
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->requestParameters['Token'] = $token;
        $this->queryParameters['Token'] = $token;

        return $this;
    }
}
