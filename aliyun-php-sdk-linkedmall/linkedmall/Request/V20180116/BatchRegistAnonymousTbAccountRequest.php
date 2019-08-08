<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchRegistAnonymousTbAccount
 *
 * @method string getBizId()
 * @method string getIdJsonList()
 */
class BatchRegistAnonymousTbAccountRequest extends \RpcAcsRequest
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
            'linkedmall',
            '2018-01-16',
            'BatchRegistAnonymousTbAccount',
            'linkedmall'
        );
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }

    /**
     * @param string $idJsonList
     *
     * @return $this
     */
    public function setIdJsonList($idJsonList)
    {
        $this->requestParameters['IdJsonList'] = $idJsonList;
        $this->queryParameters['IdJsonList'] = $idJsonList;

        return $this;
    }
}
