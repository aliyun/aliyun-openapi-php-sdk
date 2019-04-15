<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateWhiteListProcessStatus
 *
 * @method string getProcessIds()
 * @method string getSourceIp()
 * @method string getStrategyId()
 * @method string getLang()
 * @method string getStatus()
 */
class UpdateWhiteListProcessStatusRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'UpdateWhiteListProcessStatus',
            'vipaegis'
        );
    }

    /**
     * @param string $processIds
     *
     * @return $this
     */
    public function setProcessIds($processIds)
    {
        $this->requestParameters['ProcessIds'] = $processIds;
        $this->queryParameters['ProcessIds'] = $processIds;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $strategyId
     *
     * @return $this
     */
    public function setStrategyId($strategyId)
    {
        $this->requestParameters['StrategyId'] = $strategyId;
        $this->queryParameters['StrategyId'] = $strategyId;

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

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
