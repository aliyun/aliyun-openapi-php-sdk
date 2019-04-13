<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PutEventRule
 *
 * @method array getEventPatterns()
 * @method string getGroupId()
 * @method string getDescription()
 * @method string getRuleName()
 * @method string getEventType()
 * @method string getState()
 */
class PutEventRuleRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cms',
            '2019-01-01',
            'PutEventRule',
            'cms'
        );
    }

    /**
     * @param array $eventPattern
     *
     * @return $this
     */
    public function setEventPatterns(array $eventPattern)
    {
        $this->requestParameters['EventPatterns'] = $eventPattern;
        foreach ($eventPattern as $depth1 => $depth1Value) {
            foreach ($depth1Value['LevelList'] as $i => $iValue) {
                $this->queryParameters['EventPattern.' . ($depth1 + 1) . '.LevelList.' . ($i + 1)] = $iValue;
            }
            $this->queryParameters['EventPattern.' . ($depth1 + 1) . '.Product'] = $depth1Value['Product'];
            foreach ($depth1Value['StatusList'] as $i => $iValue) {
                $this->queryParameters['EventPattern.' . ($depth1 + 1) . '.StatusList.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['NameList'] as $i => $iValue) {
                $this->queryParameters['EventPattern.' . ($depth1 + 1) . '.NameList.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['EventTypeList'] as $i => $iValue) {
                $this->queryParameters['EventPattern.' . ($depth1 + 1) . '.EventTypeList.' . ($i + 1)] = $iValue;
            }
        }

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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $ruleName
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        $this->requestParameters['RuleName'] = $ruleName;
        $this->queryParameters['RuleName'] = $ruleName;

        return $this;
    }

    /**
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->requestParameters['EventType'] = $eventType;
        $this->queryParameters['EventType'] = $eventType;

        return $this;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->requestParameters['State'] = $state;
        $this->queryParameters['State'] = $state;

        return $this;
    }
}
