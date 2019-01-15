<?php

namespace Iot\Request\V20180120;

/**
 * Request of UpdateProductTags
 *
 * @method array getProductTags()
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
            'UpdateProductTags'
        );
    }

    /**
     * @param array $productTags
     *
     * @return $this
     */
    public function setProductTags(array $productTags)
    {
        $this->requestParameters['ProductTags'] = $productTags;
        foreach ($productTags as $i => $iValue) {
            $this->queryParameters['ProductTag.' . ($i + 1) . '.TagValue'] = $productTags[$i]['TagValue'];
            $this->queryParameters['ProductTag.' . ($i + 1) . '.TagKey'] = $productTags[$i]['TagKey'];
        }

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
