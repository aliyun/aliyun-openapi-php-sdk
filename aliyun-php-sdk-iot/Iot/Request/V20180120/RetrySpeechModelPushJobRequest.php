<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RetrySpeechModelPushJob
 *
 * @method string getApiProduct()
 * @method string getPushJobCode()
 * @method string getApiRevision()
 */
class RetrySpeechModelPushJobRequest extends \RpcAcsRequest
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
            'RetrySpeechModelPushJob',
            'iot'
        );
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
     * @param string $pushJobCode
     *
     * @return $this
     */
    public function setPushJobCode($pushJobCode)
    {
        $this->requestParameters['PushJobCode'] = $pushJobCode;
        $this->queryParameters['PushJobCode'] = $pushJobCode;

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
