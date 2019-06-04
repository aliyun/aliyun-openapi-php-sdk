<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddTrancodeSEI
 *
 * @method string getDelay()
 * @method string getAppName()
 * @method string getRepeat()
 * @method string getDomainName()
 * @method string getPattern()
 * @method string getText()
 * @method string getOwnerId()
 * @method string getStreamName()
 */
class AddTrancodeSEIRequest extends \RpcAcsRequest
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
            'AddTrancodeSEI',
            'live'
        );
    }

    /**
     * @param string $delay
     *
     * @return $this
     */
    public function setDelay($delay)
    {
        $this->requestParameters['Delay'] = $delay;
        $this->queryParameters['Delay'] = $delay;

        return $this;
    }

    /**
     * @param string $appName
     *
     * @return $this
     */
    public function setAppName($appName)
    {
        $this->requestParameters['AppName'] = $appName;
        $this->queryParameters['AppName'] = $appName;

        return $this;
    }

    /**
     * @param string $repeat
     *
     * @return $this
     */
    public function setRepeat($repeat)
    {
        $this->requestParameters['Repeat'] = $repeat;
        $this->queryParameters['Repeat'] = $repeat;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $pattern
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->requestParameters['Pattern'] = $pattern;
        $this->queryParameters['Pattern'] = $pattern;

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
     * @param string $streamName
     *
     * @return $this
     */
    public function setStreamName($streamName)
    {
        $this->requestParameters['StreamName'] = $streamName;
        $this->queryParameters['StreamName'] = $streamName;

        return $this;
    }
}
