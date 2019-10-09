<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateNotificationSetting
 *
 * @method string getRealtimeMessageList()
 * @method string getScheduleMessageTime()
 * @method string getSourceIp()
 * @method string getReminderModeList()
 * @method string getLang()
 * @method string getScheduleMessageTimeZone()
 */
class UpdateNotificationSettingRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'UpdateNotificationSetting',
            'green'
        );
    }

    /**
     * @param string $realtimeMessageList
     *
     * @return $this
     */
    public function setRealtimeMessageList($realtimeMessageList)
    {
        $this->requestParameters['RealtimeMessageList'] = $realtimeMessageList;
        $this->queryParameters['RealtimeMessageList'] = $realtimeMessageList;

        return $this;
    }

    /**
     * @param string $scheduleMessageTime
     *
     * @return $this
     */
    public function setScheduleMessageTime($scheduleMessageTime)
    {
        $this->requestParameters['ScheduleMessageTime'] = $scheduleMessageTime;
        $this->queryParameters['ScheduleMessageTime'] = $scheduleMessageTime;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $reminderModeList
     *
     * @return $this
     */
    public function setReminderModeList($reminderModeList)
    {
        $this->requestParameters['ReminderModeList'] = $reminderModeList;
        $this->queryParameters['ReminderModeList'] = $reminderModeList;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $scheduleMessageTimeZone
     *
     * @return $this
     */
    public function setScheduleMessageTimeZone($scheduleMessageTimeZone)
    {
        $this->requestParameters['ScheduleMessageTimeZone'] = $scheduleMessageTimeZone;
        $this->queryParameters['ScheduleMessageTimeZone'] = $scheduleMessageTimeZone;

        return $this;
    }
}
