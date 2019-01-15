<?php

namespace Iot\Request\V20180120;

/**
 * Request of QueryBatchRegisterDeviceStatus
 *
 * @method string getApplyId()
 * @method string getProductKey()
 */
class QueryBatchRegisterDeviceStatusRequest extends \RpcAcsRequest
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
            'QueryBatchRegisterDeviceStatus'
        );
    }

    /**
     * @param string $applyId
     *
     * @return $this
     */
    public function setApplyId($applyId)
    {
        $this->requestParameters['ApplyId'] = $applyId;
        $this->queryParameters['ApplyId'] = $applyId;

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
