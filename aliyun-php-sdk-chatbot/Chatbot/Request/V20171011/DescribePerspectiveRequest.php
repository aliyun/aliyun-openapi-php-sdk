<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of DescribePerspective
 *
 * @method string getPerspectiveId()
 */
class DescribePerspectiveRequest extends \RpcAcsRequest
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
            'DescribePerspective',
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
