<?php

namespace Ram\Request\V20150501;

/**
 * Request of CreateUser
 *
 * @method string getComments()
 * @method string getDisplayName()
 * @method string getMobilePhone()
 * @method string getEmail()
 * @method string getUserName()
 */
class CreateUserRequest extends \RpcAcsRequest
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
            'CreateUser',
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
     * @param string $displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->requestParameters['DisplayName'] = $displayName;
        $this->queryParameters['DisplayName'] = $displayName;

        return $this;
    }

    /**
     * @param string $mobilePhone
     *
     * @return $this
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->requestParameters['MobilePhone'] = $mobilePhone;
        $this->queryParameters['MobilePhone'] = $mobilePhone;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->requestParameters['Email'] = $email;
        $this->queryParameters['Email'] = $email;

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
