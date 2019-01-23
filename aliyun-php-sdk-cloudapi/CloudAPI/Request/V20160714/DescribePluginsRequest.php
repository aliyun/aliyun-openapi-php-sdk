<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of DescribePlugins
 *
 * @method string getPluginType()
 * @method string getPluginName()
 * @method string getSecurityToken()
 * @method string getPluginId()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class DescribePluginsRequest extends \RpcAcsRequest
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
            'DescribePlugins',
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
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
