<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyVulLevel
 *
 * @method string getConcernLevel()
 * @method string getSourceIp()
 */
class ModifyVulLevelRequest extends \RpcAcsRequest
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
            'ModifyVulLevel',
            'vipaegis'
        );
    }

    /**
     * @param string $concernLevel
     *
     * @return $this
     */
    public function setConcernLevel($concernLevel)
    {
        $this->requestParameters['ConcernLevel'] = $concernLevel;
        $this->queryParameters['ConcernLevel'] = $concernLevel;

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
}
