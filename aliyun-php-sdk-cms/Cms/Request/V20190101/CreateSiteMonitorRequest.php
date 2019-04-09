<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateSiteMonitor
 *
 * @method string getOptionsJson()
 * @method string getAddress()
 * @method string getTaskType()
 * @method string getAlertIds()
 * @method string getTaskName()
 * @method string getInterval()
 * @method string getIspCities()
 */
class CreateSiteMonitorRequest extends \RpcAcsRequest
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
            'CreateSiteMonitor',
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
     * @param string $taskType
     *
     * @return $this
     */
    public function setTaskType($taskType)
    {
        $this->requestParameters['TaskType'] = $taskType;
        $this->queryParameters['TaskType'] = $taskType;

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
