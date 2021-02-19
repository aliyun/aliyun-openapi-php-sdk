<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateRulengDistributeJob
 *
 * @method string getSourceInstanceId()
 * @method string getProductKey()
 * @method string getTargetInstanceId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateRulengDistributeJobRequest extends \RpcAcsRequest
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
            'CreateRulengDistributeJob',
            'iot'
        );
    }

    /**
     * @param string $sourceInstanceId
     *
     * @return $this
     */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->requestParameters['SourceInstanceId'] = $sourceInstanceId;
        $this->queryParameters['SourceInstanceId'] = $sourceInstanceId;

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        $this->requestParameters['ProductKey'] = $productKey;
        $this->queryParameters['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @param string $targetInstanceId
     *
     * @return $this
     */
    public function setTargetInstanceId($targetInstanceId)
    {
        $this->requestParameters['TargetInstanceId'] = $targetInstanceId;
        $this->queryParameters['TargetInstanceId'] = $targetInstanceId;

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
