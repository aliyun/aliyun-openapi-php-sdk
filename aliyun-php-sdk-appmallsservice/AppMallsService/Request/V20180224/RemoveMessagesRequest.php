<?php

namespace AppMallsService\Request\V20180224;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RemoveMessages
 *
 * @method string getMsgIds()
 * @method string getParamsJson()
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
            'AppMallsService',
            '2018-02-24',
            'RemoveMessages'
        );
    }

    /**
     * @param string $msgIds
     *
     * @return $this
     */
    public function setMsgIds($msgIds)
    {
        $this->requestParameters['MsgIds'] = $msgIds;
        $this->queryParameters['MsgIds'] = $msgIds;

        return $this;
    }

    /**
     * @param string $paramsJson
     *
     * @return $this
     */
    public function setParamsJson($paramsJson)
    {
        $this->requestParameters['ParamsJson'] = $paramsJson;
        $this->queryParameters['ParamsJson'] = $paramsJson;

        return $this;
    }
}
