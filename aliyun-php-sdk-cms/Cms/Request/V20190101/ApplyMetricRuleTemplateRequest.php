<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ApplyMetricRuleTemplate
 *
 * @method string getEnableStartTime()
 * @method string getApplyMode()
 * @method string getWebhook()
 * @method string getTemplateIds()
 * @method string getEnableEndTime()
 * @method string getGroupId()
 * @method string getNotifyLevel()
 * @method string getSilenceTime()
 */
class ApplyMetricRuleTemplateRequest extends \RpcAcsRequest
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
            'ApplyMetricRuleTemplate',
            'cms'
        );
    }

    /**
     * @param string $enableStartTime
     *
     * @return $this
     */
    public function setEnableStartTime($enableStartTime)
    {
        $this->requestParameters['EnableStartTime'] = $enableStartTime;
        $this->queryParameters['EnableStartTime'] = $enableStartTime;

        return $this;
    }

    /**
     * @param string $applyMode
     *
     * @return $this
     */
    public function setApplyMode($applyMode)
    {
        $this->requestParameters['ApplyMode'] = $applyMode;
        $this->queryParameters['ApplyMode'] = $applyMode;

        return $this;
    }

    /**
     * @param string $webhook
     *
     * @return $this
     */
    public function setWebhook($webhook)
    {
        $this->requestParameters['Webhook'] = $webhook;
        $this->queryParameters['Webhook'] = $webhook;

        return $this;
    }

    /**
     * @param string $templateIds
     *
     * @return $this
     */
    public function setTemplateIds($templateIds)
    {
        $this->requestParameters['TemplateIds'] = $templateIds;
        $this->queryParameters['TemplateIds'] = $templateIds;

        return $this;
    }

    /**
     * @param string $enableEndTime
     *
     * @return $this
     */
    public function setEnableEndTime($enableEndTime)
    {
        $this->requestParameters['EnableEndTime'] = $enableEndTime;
        $this->queryParameters['EnableEndTime'] = $enableEndTime;

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
     * @param string $notifyLevel
     *
     * @return $this
     */
    public function setNotifyLevel($notifyLevel)
    {
        $this->requestParameters['NotifyLevel'] = $notifyLevel;
        $this->queryParameters['NotifyLevel'] = $notifyLevel;

        return $this;
    }

    /**
     * @param string $silenceTime
     *
     * @return $this
     */
    public function setSilenceTime($silenceTime)
    {
        $this->requestParameters['SilenceTime'] = $silenceTime;
        $this->queryParameters['SilenceTime'] = $silenceTime;

        return $this;
    }
}
