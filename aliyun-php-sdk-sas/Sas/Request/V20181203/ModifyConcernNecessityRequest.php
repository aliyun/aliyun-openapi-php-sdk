<?php

namespace Sas\Request\V20181203;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyConcernNecessity
 *
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getConcernNecessity()
 */
class ModifyConcernNecessityRequest extends \RpcAcsRequest
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
            'Sas',
            '2018-12-03',
            'ModifyConcernNecessity',
            'sas'
        );
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
     * @param string $concernNecessity
     *
     * @return $this
     */
    public function setConcernNecessity($concernNecessity)
    {
        $this->requestParameters['ConcernNecessity'] = $concernNecessity;
        $this->queryParameters['ConcernNecessity'] = $concernNecessity;

        return $this;
    }
}
