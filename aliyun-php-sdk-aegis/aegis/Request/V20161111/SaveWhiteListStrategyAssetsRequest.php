<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveWhiteListStrategyAssets
 *
 * @method string getOperations()
 * @method string getRelationType()
 * @method string getSourceIp()
 * @method string getStrategyId()
 * @method string getLang()
 */
class SaveWhiteListStrategyAssetsRequest extends \RpcAcsRequest
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
            'SaveWhiteListStrategyAssets',
            'vipaegis'
        );
    }

    /**
     * @param string $operations
     *
     * @return $this
     */
    public function setOperations($operations)
    {
        $this->requestParameters['Operations'] = $operations;
        $this->queryParameters['Operations'] = $operations;

        return $this;
    }

    /**
     * @param string $relationType
     *
     * @return $this
     */
    public function setRelationType($relationType)
    {
        $this->requestParameters['RelationType'] = $relationType;
        $this->queryParameters['RelationType'] = $relationType;

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
}
