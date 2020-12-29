<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TestSpeechBySynthesis
 *
 * @method string getVoice()
 * @method string getProjectCode()
 * @method string getAudioFormat()
 * @method string getText()
 * @method string getVolume()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSpeechRate()
 */
class TestSpeechBySynthesisRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'TestSpeechBySynthesis',
            'iot'
        );
    }

    /**
     * @param string $voice
     *
     * @return $this
     */
    public function setVoice($voice)
    {
        $this->requestParameters['Voice'] = $voice;
        $this->queryParameters['Voice'] = $voice;

        return $this;
    }

    /**
     * @param string $projectCode
     *
     * @return $this
     */
    public function setProjectCode($projectCode)
    {
        $this->requestParameters['ProjectCode'] = $projectCode;
        $this->queryParameters['ProjectCode'] = $projectCode;

        return $this;
    }

    /**
     * @param string $audioFormat
     *
     * @return $this
     */
    public function setAudioFormat($audioFormat)
    {
        $this->requestParameters['AudioFormat'] = $audioFormat;
        $this->queryParameters['AudioFormat'] = $audioFormat;

        return $this;
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->requestParameters['Text'] = $text;
        $this->queryParameters['Text'] = $text;

        return $this;
    }

    /**
     * @param string $volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->requestParameters['Volume'] = $volume;
        $this->queryParameters['Volume'] = $volume;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }

    /**
     * @param string $speechRate
     *
     * @return $this
     */
    public function setSpeechRate($speechRate)
    {
        $this->requestParameters['SpeechRate'] = $speechRate;
        $this->queryParameters['SpeechRate'] = $speechRate;

        return $this;
    }
}
