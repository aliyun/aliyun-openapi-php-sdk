<?php

namespace afs\Request\V20180112;

/**
 * Request of AuthenticateSig
 *
 * @method string getSig()
 * @method string getRemoteIp()
 * @method string getSourceIp()
 * @method string getAppKey()
 * @method string getSessionId()
 * @method string getToken()
 * @method string getScene()
 */
class AuthenticateSigRequest extends \RpcAcsRequest
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
            'afs',
            '2018-01-12',
            'AuthenticateSig',
            'afs'
        );
    }

    /**
     * @param string $sig
     *
     * @return $this
     */
    public function setSig($sig)
    {
        $this->requestParameters['Sig'] = $sig;
        $this->queryParameters['Sig'] = $sig;

        return $this;
    }

    /**
     * @param string $remoteIp
     *
     * @return $this
     */
    public function setRemoteIp($remoteIp)
    {
        $this->requestParameters['RemoteIp'] = $remoteIp;
        $this->queryParameters['RemoteIp'] = $remoteIp;

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
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->requestParameters['AppKey'] = $appKey;
        $this->queryParameters['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->requestParameters['SessionId'] = $sessionId;
        $this->queryParameters['SessionId'] = $sessionId;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->requestParameters['Token'] = $token;
        $this->queryParameters['Token'] = $token;

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
}
