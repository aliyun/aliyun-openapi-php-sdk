<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of UpdatePerspective
 *
 * @method string getPerspectiveId()
 * @method string getName()
 */
class UpdatePerspectiveRequest extends \RpcAcsRequest
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
            'UpdatePerspective',
            'beebot'
        );
    }

    /**
     * @param string $perspectiveId
     *
     * @return $this
     */
    public function setPerspectiveId($perspectiveId)
    {
        $this->requestParameters['PerspectiveId'] = $perspectiveId;
        $this->queryParameters['PerspectiveId'] = $perspectiveId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }
}
