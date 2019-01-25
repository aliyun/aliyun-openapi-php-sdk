<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of DescribeDialogFlow
 *
 * @method string getDialogId()
 */
class DescribeDialogFlowRequest extends \RpcAcsRequest
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
            'DescribeDialogFlow',
            'beebot'
        );
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
