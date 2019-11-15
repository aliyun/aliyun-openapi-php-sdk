<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateUsageDetailDataExportTask
 *
 * @method string getDomainNames()
 * @method string getTaskName()
 * @method string getLanguage()
 * @method string getStartTime()
 * @method string getType()
 * @method string getGroup()
 * @method string getEndTime()
 * @method string getOwnerId()
 */
class CreateUsageDetailDataExportTaskRequest extends \RpcAcsRequest
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
            'Cdn',
            '2018-05-10',
            'CreateUsageDetailDataExportTask'
        );
    }

    /**
     * @param string $domainNames
     *
     * @return $this
     */
    public function setDomainNames($domainNames)
    {
        $this->requestParameters['DomainNames'] = $domainNames;
        $this->queryParameters['DomainNames'] = $domainNames;

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
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->requestParameters['Language'] = $language;
        $this->queryParameters['Language'] = $language;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->requestParameters['Group'] = $group;
        $this->queryParameters['Group'] = $group;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
