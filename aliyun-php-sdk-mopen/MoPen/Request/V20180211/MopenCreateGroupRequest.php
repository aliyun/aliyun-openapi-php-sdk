<?php

namespace MoPen\Request\V20180211;

/**
 * Request of MopenCreateGroup
 *
 * @method string getCreator()
 */
class MopenCreateGroupRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'MoPen',
            '2018-02-11',
            'MopenCreateGroup',
            'mopen'
        );
    }

    /**
     * @param string $creator
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->requestParameters['Creator'] = $creator;
        $this->queryParameters['Creator'] = $creator;

        return $this;
    }
}
