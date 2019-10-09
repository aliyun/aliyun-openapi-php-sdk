<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateKeywordLib
 *
 * @method string getMatchMode()
 * @method string getSourceIp()
 * @method string getEnable()
 * @method string getId()
 * @method string getLang()
 * @method string getBizTypes()
 * @method string getName()
 */
class UpdateKeywordLibRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'UpdateKeywordLib',
            'green'
        );
    }

    /**
     * @param string $matchMode
     *
     * @return $this
     */
    public function setMatchMode($matchMode)
    {
        $this->requestParameters['MatchMode'] = $matchMode;
        $this->queryParameters['MatchMode'] = $matchMode;

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
     * @param string $enable
     *
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->requestParameters['Enable'] = $enable;
        $this->queryParameters['Enable'] = $enable;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

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
     * @param string $bizTypes
     *
     * @return $this
     */
    public function setBizTypes($bizTypes)
    {
        $this->requestParameters['BizTypes'] = $bizTypes;
        $this->queryParameters['BizTypes'] = $bizTypes;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }
}
