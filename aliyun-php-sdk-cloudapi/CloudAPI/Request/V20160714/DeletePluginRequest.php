<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of DeletePlugin
 *
 * @method string getSecurityToken()
 * @method string getPluginId()
 */
class DeletePluginRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'DeletePlugin',
            'apigateway'
        );
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
     * @param string $pluginId
     *
     * @return $this
     */
    public function setPluginId($pluginId)
    {
        $this->requestParameters['PluginId'] = $pluginId;
        $this->queryParameters['PluginId'] = $pluginId;

        return $this;
    }
}
