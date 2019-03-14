<?php

namespace Ram\Request\V20150501;

/**
 * Request of CreateGroup
 *
 * @method string getComments()
 * @method string getGroupName()
 */
class CreateGroupRequest extends \RpcAcsRequest
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
            'Ram',
            '2015-05-01',
            'CreateGroup',
            'ram'
        );
    }

    /**
     * @param string $comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->requestParameters['Comments'] = $comments;
        $this->queryParameters['Comments'] = $comments;

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->requestParameters['GroupName'] = $groupName;
        $this->queryParameters['GroupName'] = $groupName;

        return $this;
    }
}
