<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddLiveStreamTranscode
 *
 * @method string getTemplate()
 * @method string getSecurityToken()
 * @method string getRecord()
 * @method string getApp()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getDomain()
 * @method string getSnapshot()
 */
class AddLiveStreamTranscodeRequest extends \RpcAcsRequest
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
            'Cdn',
            '2014-11-11',
            'AddLiveStreamTranscode'
        );
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
     * @param string $record
     *
     * @return $this
     */
    public function setRecord($record)
    {
        $this->requestParameters['Record'] = $record;
        $this->queryParameters['Record'] = $record;

        return $this;
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
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

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
     * @param string $snapshot
     *
     * @return $this
     */
    public function setSnapshot($snapshot)
    {
        $this->requestParameters['Snapshot'] = $snapshot;
        $this->queryParameters['Snapshot'] = $snapshot;

        return $this;
    }
}
