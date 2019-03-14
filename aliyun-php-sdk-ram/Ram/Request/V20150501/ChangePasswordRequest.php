<?php

namespace Ram\Request\V20150501;

/**
 * Request of ChangePassword
 *
 * @method string getOldPassword()
 * @method string getNewPassword()
 */
class ChangePasswordRequest extends \RpcAcsRequest
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
            'ChangePassword',
            'ram'
        );
    }

    /**
     * @param string $oldPassword
     *
     * @return $this
     */
    public function setOldPassword($oldPassword)
    {
        $this->requestParameters['OldPassword'] = $oldPassword;
        $this->queryParameters['OldPassword'] = $oldPassword;

        return $this;
    }

    /**
     * @param string $newPassword
     *
     * @return $this
     */
    public function setNewPassword($newPassword)
    {
        $this->requestParameters['NewPassword'] = $newPassword;
        $this->queryParameters['NewPassword'] = $newPassword;

        return $this;
    }
}
