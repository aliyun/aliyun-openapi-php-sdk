<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RemoveMessages
 *
 * @method string getExtJson()
 * @method string getBizId()
 * @method string getMessageIds()
 */
class RemoveMessagesRequest extends \RpcAcsRequest
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
            'linkedmall',
            '2018-01-16',
            'RemoveMessages',
            'linkedmall'
        );
    }

    /**
     * @param string $extJson
     *
     * @return $this
     */
    public function setExtJson($extJson)
    {
        $this->requestParameters['ExtJson'] = $extJson;
        $this->queryParameters['ExtJson'] = $extJson;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }

    /**
     * @param string $messageIds
     *
     * @return $this
     */
    public function setMessageIds($messageIds)
    {
        $this->requestParameters['MessageIds'] = $messageIds;
        $this->queryParameters['MessageIds'] = $messageIds;

        return $this;
    }
}
