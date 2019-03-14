<?php

namespace Ram\Request\V20150501;

/**
 * Request of DeleteAccessKey
 *
 * @method string getUserAccessKeyId()
 * @method string getUserName()
 */
class DeleteAccessKeyRequest extends \RpcAcsRequest
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
            'DeleteAccessKey',
            'ram'
        );
    }

    /**
     * @param string $userAccessKeyId
     *
     * @return $this
     */
    public function setUserAccessKeyId($userAccessKeyId)
    {
        $this->requestParameters['UserAccessKeyId'] = $userAccessKeyId;
        $this->queryParameters['UserAccessKeyId'] = $userAccessKeyId;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->requestParameters['UserName'] = $userName;
        $this->queryParameters['UserName'] = $userName;

        return $this;
    }
}
