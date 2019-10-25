<?php

namespace Push\Request\V20160801;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ContinuouslyPush
 *
 * @method string getMessageId()
 * @method string getTarget()
 * @method string getAppKey()
 * @method string getTargetValue()
 */
class ContinuouslyPushRequest extends \RpcAcsRequest
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
            'Push',
            '2016-08-01',
            'ContinuouslyPush',
            'cps'
        );
    }

    /**
     * @param string $messageId
     *
     * @return $this
     */
    public function setMessageId($messageId)
    {
        $this->requestParameters['MessageId'] = $messageId;
        $this->queryParameters['MessageId'] = $messageId;

        return $this;
    }

    /**
     * @param string $target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->requestParameters['Target'] = $target;
        $this->queryParameters['Target'] = $target;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->requestParameters['AppKey'] = $appKey;
        $this->queryParameters['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param string $targetValue
     *
     * @return $this
     */
    public function setTargetValue($targetValue)
    {
        $this->requestParameters['TargetValue'] = $targetValue;
        $this->queryParameters['TargetValue'] = $targetValue;

        return $this;
    }
}
