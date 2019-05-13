<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CancelTask
 *
 * @method string getUserClientIp()
 * @method string getTaskNo()
 * @method string getLang()
 */
class CancelTaskRequest extends \RpcAcsRequest
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
            'Domain',
            '2018-01-29',
            'CancelTask'
        );
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $taskNo
     *
     * @return $this
     */
    public function setTaskNo($taskNo)
    {
        $this->requestParameters['TaskNo'] = $taskNo;
        $this->queryParameters['TaskNo'] = $taskNo;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
