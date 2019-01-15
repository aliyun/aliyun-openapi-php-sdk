<?php

namespace Iot\Request\V20180120;

/**
 * Request of DeleteRuleAction
 *
 * @method string getActionId()
 */
class DeleteRuleActionRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'DeleteRuleAction'
        );
    }

    /**
     * @param string $actionId
     *
     * @return $this
     */
    public function setActionId($actionId)
    {
        $this->requestParameters['ActionId'] = $actionId;
        $this->queryParameters['ActionId'] = $actionId;

        return $this;
    }
}
