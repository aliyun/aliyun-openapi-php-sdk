<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of UpdateDialogFlow
 *
 * @method string getModuleDefinition()
 * @method string getDialogId()
 */
class UpdateDialogFlowRequest extends \RpcAcsRequest
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
            'Chatbot',
            '2017-10-11',
            'UpdateDialogFlow',
            'beebot'
        );
    }

    /**
     * @param string $moduleDefinition
     *
     * @return $this
     */
    public function setModuleDefinition($moduleDefinition)
    {
        $this->requestParameters['ModuleDefinition'] = $moduleDefinition;
        $this->queryParameters['ModuleDefinition'] = $moduleDefinition;

        return $this;
    }

    /**
     * @param string $dialogId
     *
     * @return $this
     */
    public function setDialogId($dialogId)
    {
        $this->requestParameters['DialogId'] = $dialogId;
        $this->queryParameters['DialogId'] = $dialogId;

        return $this;
    }
}
