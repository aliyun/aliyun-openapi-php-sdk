<?php

namespace Iot\Request\V20180120;

/**
 * Request of DeleteProductTags
 *
 * @method string getIotInstanceId()
 * @method array getProductTagKeys()
 * @method string getProductKey()
 */
class DeleteProductTagsRequest extends \RpcAcsRequest
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
            'DeleteProductTags'
        );
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
     * @param array $productTagKeys
     *
     * @return $this
     */
    public function setProductTagKeys(array $productTagKeys)
    {
        $this->requestParameters['ProductTagKeys'] = $productTagKeys;
        foreach ($productTagKeys as $i => $iValue) {
            $this->queryParameters['ProductTagKey.' . ($i + 1)] = $iValue;
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
