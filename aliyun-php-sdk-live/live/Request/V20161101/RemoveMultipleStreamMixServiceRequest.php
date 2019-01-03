<?php

namespace live\Request\V20161101;

/**
 * Request of RemoveMultipleStreamMixService
 *
 * @method string getAppName()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getMixStreamName()
 * @method string getMixDomainName()
 * @method string getOwnerId()
 * @method string getMixAppName()
 * @method string getStreamName()
 */
class RemoveMultipleStreamMixServiceRequest extends \RpcAcsRequest
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
            'RemoveMultipleStreamMixService',
            'live'
        );
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
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

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
     * @param string $mixStreamName
     *
     * @return $this
     */
    public function setMixStreamName($mixStreamName)
    {
        $this->requestParameters['MixStreamName'] = $mixStreamName;
        $this->queryParameters['MixStreamName'] = $mixStreamName;

        return $this;
    }

    /**
     * @param string $mixDomainName
     *
     * @return $this
     */
    public function setMixDomainName($mixDomainName)
    {
        $this->requestParameters['MixDomainName'] = $mixDomainName;
        $this->queryParameters['MixDomainName'] = $mixDomainName;

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
     * @param string $mixAppName
     *
     * @return $this
     */
    public function setMixAppName($mixAppName)
    {
        $this->requestParameters['MixAppName'] = $mixAppName;
        $this->queryParameters['MixAppName'] = $mixAppName;

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
