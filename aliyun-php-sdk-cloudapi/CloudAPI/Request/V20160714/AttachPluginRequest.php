<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of AttachPlugin
 *
 * @method string getStageName()
 * @method string getSecurityToken()
 * @method string getPluginId()
 * @method string getGroupId()
 * @method string getApiId()
 * @method string getApiIds()
 */
class AttachPluginRequest extends \RpcAcsRequest
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
            'AttachPlugin',
            'apigateway'
        );
    }

    /**
     * @param string $stageName
     *
     * @return $this
     */
    public function setStageName($stageName)
    {
        $this->requestParameters['StageName'] = $stageName;
        $this->queryParameters['StageName'] = $stageName;

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

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $apiId
     *
     * @return $this
     */
    public function setApiId($apiId)
    {
        $this->requestParameters['ApiId'] = $apiId;
        $this->queryParameters['ApiId'] = $apiId;

        return $this;
    }

    /**
     * @param string $apiIds
     *
     * @return $this
     */
    public function setApiIds($apiIds)
    {
        $this->requestParameters['ApiIds'] = $apiIds;
        $this->queryParameters['ApiIds'] = $apiIds;

        return $this;
    }
}
