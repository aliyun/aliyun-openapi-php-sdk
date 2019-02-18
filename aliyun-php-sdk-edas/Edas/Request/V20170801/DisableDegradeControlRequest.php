<?php

namespace Edas\Request\V20170801;

/**
 * Request of DisableDegradeControl
 *
 * @method string getAppId()
 * @method string getRuleId()
 */
class DisableDegradeControlRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/degradecontrol/disable';

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
            'Edas',
            '2017-08-01',
            'DisableDegradeControl'
        );
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $ruleId
     *
     * @return $this
     */
    public function setRuleId($ruleId)
    {
        $this->requestParameters['RuleId'] = $ruleId;
        $this->queryParameters['RuleId'] = $ruleId;

        return $this;
    }
}
