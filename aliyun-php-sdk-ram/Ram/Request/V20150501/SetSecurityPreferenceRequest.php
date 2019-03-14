<?php

namespace Ram\Request\V20150501;

/**
 * Request of SetSecurityPreference
 *
 * @method string getAllowUserToManageAccessKeys()
 * @method string getAllowUserToManageMFADevices()
 * @method string getAllowUserToManagePublicKeys()
 * @method string getEnableSaveMFATicket()
 * @method string getLoginNetworkMasks()
 * @method string getAllowUserToChangePassword()
 * @method string getLoginSessionDuration()
 */
class SetSecurityPreferenceRequest extends \RpcAcsRequest
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
            'SetSecurityPreference',
            'ram'
        );
    }

    /**
     * @param string $allowUserToManageAccessKeys
     *
     * @return $this
     */
    public function setAllowUserToManageAccessKeys($allowUserToManageAccessKeys)
    {
        $this->requestParameters['AllowUserToManageAccessKeys'] = $allowUserToManageAccessKeys;
        $this->queryParameters['AllowUserToManageAccessKeys'] = $allowUserToManageAccessKeys;

        return $this;
    }

    /**
     * @param string $allowUserToManageMFADevices
     *
     * @return $this
     */
    public function setAllowUserToManageMFADevices($allowUserToManageMFADevices)
    {
        $this->requestParameters['AllowUserToManageMFADevices'] = $allowUserToManageMFADevices;
        $this->queryParameters['AllowUserToManageMFADevices'] = $allowUserToManageMFADevices;

        return $this;
    }

    /**
     * @param string $allowUserToManagePublicKeys
     *
     * @return $this
     */
    public function setAllowUserToManagePublicKeys($allowUserToManagePublicKeys)
    {
        $this->requestParameters['AllowUserToManagePublicKeys'] = $allowUserToManagePublicKeys;
        $this->queryParameters['AllowUserToManagePublicKeys'] = $allowUserToManagePublicKeys;

        return $this;
    }

    /**
     * @param string $enableSaveMFATicket
     *
     * @return $this
     */
    public function setEnableSaveMFATicket($enableSaveMFATicket)
    {
        $this->requestParameters['EnableSaveMFATicket'] = $enableSaveMFATicket;
        $this->queryParameters['EnableSaveMFATicket'] = $enableSaveMFATicket;

        return $this;
    }

    /**
     * @param string $loginNetworkMasks
     *
     * @return $this
     */
    public function setLoginNetworkMasks($loginNetworkMasks)
    {
        $this->requestParameters['LoginNetworkMasks'] = $loginNetworkMasks;
        $this->queryParameters['LoginNetworkMasks'] = $loginNetworkMasks;

        return $this;
    }

    /**
     * @param string $allowUserToChangePassword
     *
     * @return $this
     */
    public function setAllowUserToChangePassword($allowUserToChangePassword)
    {
        $this->requestParameters['AllowUserToChangePassword'] = $allowUserToChangePassword;
        $this->queryParameters['AllowUserToChangePassword'] = $allowUserToChangePassword;

        return $this;
    }

    /**
     * @param string $loginSessionDuration
     *
     * @return $this
     */
    public function setLoginSessionDuration($loginSessionDuration)
    {
        $this->requestParameters['LoginSessionDuration'] = $loginSessionDuration;
        $this->queryParameters['LoginSessionDuration'] = $loginSessionDuration;

        return $this;
    }
}
