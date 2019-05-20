<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ApplyNotaryPost
 *
 * @method string getReceiverName()
 * @method string getReceiverPhone()
 * @method string getNotaryOrderId()
 * @method string getReceiverAddress()
 */
class ApplyNotaryPostRequest extends \RpcAcsRequest
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
            'ApplyNotaryPost',
            'trademark'
        );
    }

    /**
     * @param string $receiverName
     *
     * @return $this
     */
    public function setReceiverName($receiverName)
    {
        $this->requestParameters['ReceiverName'] = $receiverName;
        $this->queryParameters['ReceiverName'] = $receiverName;

        return $this;
    }

    /**
     * @param string $receiverPhone
     *
     * @return $this
     */
    public function setReceiverPhone($receiverPhone)
    {
        $this->requestParameters['ReceiverPhone'] = $receiverPhone;
        $this->queryParameters['ReceiverPhone'] = $receiverPhone;

        return $this;
    }

    /**
     * @param string $notaryOrderId
     *
     * @return $this
     */
    public function setNotaryOrderId($notaryOrderId)
    {
        $this->requestParameters['NotaryOrderId'] = $notaryOrderId;
        $this->queryParameters['NotaryOrderId'] = $notaryOrderId;

        return $this;
    }

    /**
     * @param string $receiverAddress
     *
     * @return $this
     */
    public function setReceiverAddress($receiverAddress)
    {
        $this->requestParameters['ReceiverAddress'] = $receiverAddress;
        $this->queryParameters['ReceiverAddress'] = $receiverAddress;

        return $this;
    }
}
