<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifySiteMonitor
 *
 * @method string getOptionsJson()
 * @method string getAddress()
 * @method string getAlertIds()
 * @method string getTaskName()
 * @method string getInterval()
 * @method string getTaskId()
 * @method string getIspCities()
 */
class ModifySiteMonitorRequest extends \RpcAcsRequest
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
            'ModifySiteMonitor',
            'cms'
        );
    }

    /**
     * @param string $optionsJson
     *
     * @return $this
     */
    public function setOptionsJson($optionsJson)
    {
        $this->requestParameters['OptionsJson'] = $optionsJson;
        $this->queryParameters['OptionsJson'] = $optionsJson;

        return $this;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->requestParameters['Address'] = $address;
        $this->queryParameters['Address'] = $address;

        return $this;
    }

    /**
     * @param string $alertIds
     *
     * @return $this
     */
    public function setAlertIds($alertIds)
    {
        $this->requestParameters['AlertIds'] = $alertIds;
        $this->queryParameters['AlertIds'] = $alertIds;

        return $this;
    }

    /**
     * @param string $taskName
     *
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->requestParameters['TaskName'] = $taskName;
        $this->queryParameters['TaskName'] = $taskName;

        return $this;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->requestParameters['Interval'] = $interval;
        $this->queryParameters['Interval'] = $interval;

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

    /**
     * @param string $ispCities
     *
     * @return $this
     */
    public function setIspCities($ispCities)
    {
        $this->requestParameters['IspCities'] = $ispCities;
        $this->queryParameters['IspCities'] = $ispCities;

        return $this;
    }
}
