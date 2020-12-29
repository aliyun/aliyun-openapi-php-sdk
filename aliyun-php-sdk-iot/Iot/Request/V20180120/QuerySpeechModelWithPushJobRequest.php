<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QuerySpeechModelWithPushJob
 *
 * @method string getCode()
 * @method string getPageId()
 * @method string getPageSize()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QuerySpeechModelWithPushJobRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'QuerySpeechModelWithPushJob',
            'iot'
        );
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->requestParameters['Code'] = $code;
        $this->queryParameters['Code'] = $code;

        return $this;
    }

    /**
     * @param string $pageId
     *
     * @return $this
     */
    public function setPageId($pageId)
    {
        $this->requestParameters['PageId'] = $pageId;
        $this->queryParameters['PageId'] = $pageId;

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
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }
}
