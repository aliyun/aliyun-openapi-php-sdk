<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of CreateDialog
 *
 * @method string getInstanceId()
 * @method string getDescription()
 * @method string getDialogName()
 */
class CreateDialogRequest extends \RpcAcsRequest
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
            'CreateDialog',
            'beebot'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

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
