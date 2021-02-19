<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateProductDistributeJob
 *
 * @method string getCaptcha()
 * @method string getSourceInstanceId()
 * @method string getTargetAliyunId()
 * @method string getProductKey()
 * @method string getTargetInstanceId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getTargetUid()
 */
class CreateProductDistributeJobRequest extends \RpcAcsRequest
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
            'CreateProductDistributeJob',
            'iot'
        );
    }

    /**
     * @param string $captcha
     *
     * @return $this
     */
    public function setCaptcha($captcha)
    {
        $this->requestParameters['Captcha'] = $captcha;
        $this->queryParameters['Captcha'] = $captcha;

        return $this;
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
     * @param string $targetAliyunId
     *
     * @return $this
     */
    public function setTargetAliyunId($targetAliyunId)
    {
        $this->requestParameters['TargetAliyunId'] = $targetAliyunId;
        $this->queryParameters['TargetAliyunId'] = $targetAliyunId;

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

    /**
     * @param string $targetUid
     *
     * @return $this
     */
    public function setTargetUid($targetUid)
    {
        $this->requestParameters['TargetUid'] = $targetUid;
        $this->queryParameters['TargetUid'] = $targetUid;

        return $this;
    }
}
