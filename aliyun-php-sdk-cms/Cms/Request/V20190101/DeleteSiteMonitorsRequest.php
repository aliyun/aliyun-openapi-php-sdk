<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteSiteMonitors
 *
 * @method string getIsDeleteAlarms()
 * @method string getTaskIds()
 */
class DeleteSiteMonitorsRequest extends \RpcAcsRequest
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
            'DeleteSiteMonitors',
            'cms'
        );
    }

    /**
     * @param string $isDeleteAlarms
     *
     * @return $this
     */
    public function setIsDeleteAlarms($isDeleteAlarms)
    {
        $this->requestParameters['IsDeleteAlarms'] = $isDeleteAlarms;
        $this->queryParameters['IsDeleteAlarms'] = $isDeleteAlarms;

        return $this;
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
