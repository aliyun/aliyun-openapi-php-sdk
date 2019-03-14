<?php

namespace Ram\Request\V20150501;

/**
 * Request of UpdateUser
 *
 * @method string getNewUserName()
 * @method string getNewDisplayName()
 * @method string getNewMobilePhone()
 * @method string getNewComments()
 * @method string getNewEmail()
 * @method string getUserName()
 */
class UpdateUserRequest extends \RpcAcsRequest
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
            'UpdateUser',
            'ram'
        );
    }

    /**
     * @param string $newUserName
     *
     * @return $this
     */
    public function setNewUserName($newUserName)
    {
        $this->requestParameters['NewUserName'] = $newUserName;
        $this->queryParameters['NewUserName'] = $newUserName;

        return $this;
    }

    /**
     * @param string $newDisplayName
     *
     * @return $this
     */
    public function setNewDisplayName($newDisplayName)
    {
        $this->requestParameters['NewDisplayName'] = $newDisplayName;
        $this->queryParameters['NewDisplayName'] = $newDisplayName;

        return $this;
    }

    /**
     * @param string $newMobilePhone
     *
     * @return $this
     */
    public function setNewMobilePhone($newMobilePhone)
    {
        $this->requestParameters['NewMobilePhone'] = $newMobilePhone;
        $this->queryParameters['NewMobilePhone'] = $newMobilePhone;

        return $this;
    }

    /**
     * @param string $newComments
     *
     * @return $this
     */
    public function setNewComments($newComments)
    {
        $this->requestParameters['NewComments'] = $newComments;
        $this->queryParameters['NewComments'] = $newComments;

        return $this;
    }

    /**
     * @param string $newEmail
     *
     * @return $this
     */
    public function setNewEmail($newEmail)
    {
        $this->requestParameters['NewEmail'] = $newEmail;
        $this->queryParameters['NewEmail'] = $newEmail;

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
