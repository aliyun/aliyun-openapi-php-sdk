<?php

namespace Edas\Request\V20170801;

/**
 * Request of AuthorizeApplication
 *
 * @method string getAppIds()
 * @method string getTargetUserId()
 */
class AuthorizeApplicationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/account/authorize_app';

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
            'Edas',
            '2017-08-01',
            'AuthorizeApplication'
        );
    }

    /**
     * @param string $appIds
     *
     * @return $this
     */
    public function setAppIds($appIds)
    {
        $this->requestParameters['AppIds'] = $appIds;
        $this->queryParameters['AppIds'] = $appIds;

        return $this;
    }

    /**
     * @param string $targetUserId
     *
     * @return $this
     */
    public function setTargetUserId($targetUserId)
    {
        $this->requestParameters['TargetUserId'] = $targetUserId;
        $this->queryParameters['TargetUserId'] = $targetUserId;

        return $this;
    }
}
