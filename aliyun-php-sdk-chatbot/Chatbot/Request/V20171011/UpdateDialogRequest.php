<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of UpdateDialog
 *
 * @method string getDescription()
 * @method string getDialogId()
 * @method string getDialogName()
 */
class UpdateDialogRequest extends \RpcAcsRequest
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
            'UpdateDialog',
            'beebot'
        );
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

    /**
     * @param string $dialogName
     *
     * @return $this
     */
    public function setDialogName($dialogName)
    {
        $this->requestParameters['DialogName'] = $dialogName;
        $this->queryParameters['DialogName'] = $dialogName;

        return $this;
    }
}
