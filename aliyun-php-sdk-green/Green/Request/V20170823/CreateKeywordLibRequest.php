<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateKeywordLib
 *
 * @method string getLanguage()
 * @method string getServiceModule()
 * @method string getMatchMode()
 * @method string getSourceIp()
 * @method string getLibType()
 * @method string getEnable()
 * @method string getLang()
 * @method string getBizTypes()
 * @method string getResourceType()
 * @method string getName()
 * @method string getCategory()
 */
class CreateKeywordLibRequest extends \RpcAcsRequest
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
            'CreateKeywordLib',
            'green'
        );
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->requestParameters['Language'] = $language;
        $this->queryParameters['Language'] = $language;

        return $this;
    }

    /**
     * @param string $serviceModule
     *
     * @return $this
     */
    public function setServiceModule($serviceModule)
    {
        $this->requestParameters['ServiceModule'] = $serviceModule;
        $this->queryParameters['ServiceModule'] = $serviceModule;

        return $this;
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
     * @param string $libType
     *
     * @return $this
     */
    public function setLibType($libType)
    {
        $this->requestParameters['LibType'] = $libType;
        $this->queryParameters['LibType'] = $libType;

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
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

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

    /**
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->requestParameters['Category'] = $category;
        $this->queryParameters['Category'] = $category;

        return $this;
    }
}
