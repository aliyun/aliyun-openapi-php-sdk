<?php

namespace alimt\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of Translate
 *
 * @method string getSourceLanguage()
 * @method string getSourceText()
 * @method string getFormatType()
 * @method string getScene()
 * @method string getTargetLanguage()
 */
class TranslateRequest extends \RpcAcsRequest
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
            'Translate',
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
     * @param string $sourceText
     *
     * @return $this
     */
    public function setSourceText($sourceText)
    {
        $this->requestParameters['SourceText'] = $sourceText;
        $this->queryParameters['SourceText'] = $sourceText;

        return $this;
    }

    /**
     * @param string $formatType
     *
     * @return $this
     */
    public function setFormatType($formatType)
    {
        $this->requestParameters['FormatType'] = $formatType;
        $this->queryParameters['FormatType'] = $formatType;

        return $this;
    }

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        $this->requestParameters['Scene'] = $scene;
        $this->queryParameters['Scene'] = $scene;

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
