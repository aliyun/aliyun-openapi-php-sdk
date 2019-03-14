<?php

namespace MoPen\Request\V20180211;

/**
 * Request of MoPenDeleteGroup
 *
 * @method string getGroupId()
 */
class MoPenDeleteGroupRequest extends \RpcAcsRequest
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
            'MoPenDeleteGroup',
            'mopen'
        );
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }
}
