<?php

namespace alimt\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetImageTranslate
 *
 * @method string getSourceLanguage()
 * @method string getUrl()
 * @method string getExtra()
 * @method string getTargetLanguage()
 */
class GetImageTranslateRequest extends \RpcAcsRequest
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
            'GetImageTranslate',
            'alimt'
        );
    }

    /**
     * @param string $sourceLanguage
     *
     * @return $this
     */
    public function setSourceLanguage($sourceLanguage)
    {
        $this->requestParameters['SourceLanguage'] = $sourceLanguage;
        $this->queryParameters['SourceLanguage'] = $sourceLanguage;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->requestParameters['Url'] = $url;
        $this->queryParameters['Url'] = $url;

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
     * @param string $targetLanguage
     *
     * @return $this
     */
    public function setTargetLanguage($targetLanguage)
    {
        $this->requestParameters['TargetLanguage'] = $targetLanguage;
        $this->queryParameters['TargetLanguage'] = $targetLanguage;

        return $this;
    }
}
