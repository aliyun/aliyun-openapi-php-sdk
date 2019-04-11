<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of EnableSiteMonitors
 *
 * @method string getTaskIds()
 */
class EnableSiteMonitorsRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'EnableSiteMonitors',
            'cms'
        );
    }

    /**
     * @param string $taskIds
     *
     * @return $this
     */
    public function setTaskIds($taskIds)
    {
        $this->requestParameters['TaskIds'] = $taskIds;
        $this->queryParameters['TaskIds'] = $taskIds;

        return $this;
    }
}
