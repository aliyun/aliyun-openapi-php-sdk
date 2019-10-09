<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreatCustomOcrTemplate
 *
 * @method string getRecognizeArea()
 * @method string getImgUrl()
 * @method string getSourceIp()
 * @method string getReferArea()
 * @method string getName()
 */
class CreatCustomOcrTemplateRequest extends \RpcAcsRequest
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
            'CreatCustomOcrTemplate',
            'green'
        );
    }

    /**
     * @param string $recognizeArea
     *
     * @return $this
     */
    public function setRecognizeArea($recognizeArea)
    {
        $this->requestParameters['RecognizeArea'] = $recognizeArea;
        $this->queryParameters['RecognizeArea'] = $recognizeArea;

        return $this;
    }

    /**
     * @param string $imgUrl
     *
     * @return $this
     */
    public function setImgUrl($imgUrl)
    {
        $this->requestParameters['ImgUrl'] = $imgUrl;
        $this->queryParameters['ImgUrl'] = $imgUrl;

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
     * @param string $referArea
     *
     * @return $this
     */
    public function setReferArea($referArea)
    {
        $this->requestParameters['ReferArea'] = $referArea;
        $this->queryParameters['ReferArea'] = $referArea;

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
