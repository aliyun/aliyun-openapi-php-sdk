<?php

namespace alimt\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetTitleDiagnose
 *
 * @method string getLanguage()
 * @method string getTitle()
 * @method string getPlatform()
 * @method string getExtra()
 * @method string getCategoryId()
 */
class GetTitleDiagnoseRequest extends \RpcAcsRequest
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
            'GetTitleDiagnose',
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
