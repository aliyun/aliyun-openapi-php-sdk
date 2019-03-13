<?php

namespace TeslaStream\Request\V20180115;

/**
 * Request of BatchGetPluginConfigInfo
 *
 * @method string getPluginInfos()
 */
class BatchGetPluginConfigInfoRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'TeslaStream',
            '2018-01-15',
            'BatchGetPluginConfigInfo',
            'teslastream'
        );
    }

    /**
     * @param string $pluginInfos
     *
     * @return $this
     */
    public function setPluginInfos($pluginInfos)
    {
        $this->requestParameters['PluginInfos'] = $pluginInfos;
        $this->queryParameters['PluginInfos'] = $pluginInfos;

        return $this;
    }
}
