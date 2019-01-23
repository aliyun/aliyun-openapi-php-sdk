<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of CreatePlugin
 *
 * @method string getPluginType()
 * @method string getPluginName()
 * @method string getSecurityToken()
 * @method string getPluginData()
 * @method string getDescription()
 */
class CreatePluginRequest extends \RpcAcsRequest
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
            'CreatePlugin',
            'apigateway'
        );
    }

    /**
     * @param string $pluginType
     *
     * @return $this
     */
    public function setPluginType($pluginType)
    {
        $this->requestParameters['PluginType'] = $pluginType;
        $this->queryParameters['PluginType'] = $pluginType;

        return $this;
    }

    /**
     * @param string $pluginName
     *
     * @return $this
     */
    public function setPluginName($pluginName)
    {
        $this->requestParameters['PluginName'] = $pluginName;
        $this->queryParameters['PluginName'] = $pluginName;

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
     * @param string $pluginData
     *
     * @return $this
     */
    public function setPluginData($pluginData)
    {
        $this->requestParameters['PluginData'] = $pluginData;
        $this->queryParameters['PluginData'] = $pluginData;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }
}
