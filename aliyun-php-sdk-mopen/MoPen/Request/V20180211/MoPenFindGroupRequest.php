<?php

namespace MoPen\Request\V20180211;

/**
 * Request of MoPenFindGroup
 *
 * @method string getCreator()
 */
class MoPenFindGroupRequest extends \RpcAcsRequest
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
            'MoPenFindGroup',
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
