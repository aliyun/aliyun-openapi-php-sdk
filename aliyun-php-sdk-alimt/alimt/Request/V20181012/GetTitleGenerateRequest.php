<?php

namespace alimt\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetTitleGenerate
 *
 * @method string getLanguage()
 * @method string getTitle()
 * @method string getPlatform()
 * @method string getExtra()
 * @method string getAttributes()
 * @method string getHotWords()
 * @method string getCategoryId()
 */
class GetTitleGenerateRequest extends \RpcAcsRequest
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
            'alimt',
            '2018-10-12',
            'GetTitleGenerate',
            'alimt'
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
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->requestParameters['Title'] = $title;
        $this->queryParameters['Title'] = $title;

        return $this;
    }

    /**
     * @param string $platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->requestParameters['Platform'] = $platform;
        $this->queryParameters['Platform'] = $platform;

        return $this;
    }

    /**
     * @param string $extra
     *
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->requestParameters['Extra'] = $extra;
        $this->queryParameters['Extra'] = $extra;

        return $this;
    }

    /**
     * @param string $attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->requestParameters['Attributes'] = $attributes;
        $this->queryParameters['Attributes'] = $attributes;

        return $this;
    }

    /**
     * @param string $hotWords
     *
     * @return $this
     */
    public function setHotWords($hotWords)
    {
        $this->requestParameters['HotWords'] = $hotWords;
        $this->queryParameters['HotWords'] = $hotWords;

        return $this;
    }

    /**
     * @param string $categoryId
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->requestParameters['CategoryId'] = $categoryId;
        $this->queryParameters['CategoryId'] = $categoryId;

        return $this;
    }
}
