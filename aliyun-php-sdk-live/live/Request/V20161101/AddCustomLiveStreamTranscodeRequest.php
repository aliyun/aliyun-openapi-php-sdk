<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddCustomLiveStreamTranscode
 *
 * @method string getApp()
 * @method string getTemplate()
 * @method string getProfile()
 * @method string getFPS()
 * @method string getGop()
 * @method string getOwnerId()
 * @method string getTemplateType()
 * @method string getAudioBitrate()
 * @method string getDomain()
 * @method string getWidth()
 * @method string getVideoBitrate()
 * @method string getHeight()
 */
class AddCustomLiveStreamTranscodeRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'AddCustomLiveStreamTranscode',
            'live'
        );
    }

    /**
     * @param string $app
     *
     * @return $this
     */
    public function setApp($app)
    {
        $this->requestParameters['App'] = $app;
        $this->queryParameters['App'] = $app;

        return $this;
    }

    /**
     * @param string $template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->requestParameters['Template'] = $template;
        $this->queryParameters['Template'] = $template;

        return $this;
    }

    /**
     * @param string $profile
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->requestParameters['Profile'] = $profile;
        $this->queryParameters['Profile'] = $profile;

        return $this;
    }

    /**
     * @param string $fPS
     *
     * @return $this
     */
    public function setFPS($fPS)
    {
        $this->requestParameters['FPS'] = $fPS;
        $this->queryParameters['FPS'] = $fPS;

        return $this;
    }

    /**
     * @param string $gop
     *
     * @return $this
     */
    public function setGop($gop)
    {
        $this->requestParameters['Gop'] = $gop;
        $this->queryParameters['Gop'] = $gop;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $templateType
     *
     * @return $this
     */
    public function setTemplateType($templateType)
    {
        $this->requestParameters['TemplateType'] = $templateType;
        $this->queryParameters['TemplateType'] = $templateType;

        return $this;
    }

    /**
     * @param string $audioBitrate
     *
     * @return $this
     */
    public function setAudioBitrate($audioBitrate)
    {
        $this->requestParameters['AudioBitrate'] = $audioBitrate;
        $this->queryParameters['AudioBitrate'] = $audioBitrate;

        return $this;
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->requestParameters['Domain'] = $domain;
        $this->queryParameters['Domain'] = $domain;

        return $this;
    }

    /**
     * @param string $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->requestParameters['Width'] = $width;
        $this->queryParameters['Width'] = $width;

        return $this;
    }

    /**
     * @param string $videoBitrate
     *
     * @return $this
     */
    public function setVideoBitrate($videoBitrate)
    {
        $this->requestParameters['VideoBitrate'] = $videoBitrate;
        $this->queryParameters['VideoBitrate'] = $videoBitrate;

        return $this;
    }

    /**
     * @param string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->requestParameters['Height'] = $height;
        $this->queryParameters['Height'] = $height;

        return $this;
    }
}
