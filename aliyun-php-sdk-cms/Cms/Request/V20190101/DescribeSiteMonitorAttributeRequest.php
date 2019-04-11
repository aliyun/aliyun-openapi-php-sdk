<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeSiteMonitorAttribute
 *
 * @method string getIncludeAlert()
 * @method string getTaskId()
 */
class DescribeSiteMonitorAttributeRequest extends \RpcAcsRequest
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
            'DescribeSiteMonitorAttribute',
            'cms'
        );
    }

    /**
     * @param string $includeAlert
     *
     * @return $this
     */
    public function setIncludeAlert($includeAlert)
    {
        $this->requestParameters['IncludeAlert'] = $includeAlert;
        $this->queryParameters['IncludeAlert'] = $includeAlert;

        return $this;
    }

    /**
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        $this->requestParameters['TaskId'] = $taskId;
        $this->queryParameters['TaskId'] = $taskId;

        return $this;
    }
}
