<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateProductTags
 *
 * @method array getProductTags()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 */
class UpdateProductTagsRequest extends \RpcAcsRequest
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
            'UpdateProductTags',
            'iot'
        );
    }

    /**
     * @param array $productTag
     *
     * @return $this
     */
    public function setProductTags(array $productTag)
    {
        $this->requestParameters['ProductTags'] = $productTag;
        foreach ($productTag as $depth1 => $depth1Value) {
            $this->queryParameters['ProductTag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->queryParameters['ProductTag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
        }

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

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
}
