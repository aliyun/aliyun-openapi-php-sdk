<?php

namespace alimt\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDocTranslateTask
 *
 * @method string getSourceLanguage()
 * @method string getClientToken()
 * @method string getScene()
 * @method string getFileUrl()
 * @method string getTargetLanguage()
 * @method string getCallbackUrl()
 */
class CreateDocTranslateTaskRequest extends \RpcAcsRequest
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
            'CreateDocTranslateTask',
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
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

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
     * @param string $fileUrl
     *
     * @return $this
     */
    public function setFileUrl($fileUrl)
    {
        $this->requestParameters['FileUrl'] = $fileUrl;
        $this->queryParameters['FileUrl'] = $fileUrl;

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

    /**
     * @param string $callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->requestParameters['CallbackUrl'] = $callbackUrl;
        $this->queryParameters['CallbackUrl'] = $callbackUrl;

        return $this;
    }
}
