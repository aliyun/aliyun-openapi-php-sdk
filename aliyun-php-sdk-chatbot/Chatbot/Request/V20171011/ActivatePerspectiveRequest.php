<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of ActivatePerspective
 *
 * @method string getPerspectiveId()
 */
class ActivatePerspectiveRequest extends \RpcAcsRequest
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
            'ActivatePerspective',
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
}
