<?php

namespace Ram\Request\V20150501;

/**
 * Request of SetPasswordPolicy
 *
 * @method string getRequireNumbers()
 * @method string getPasswordReusePrevention()
 * @method string getRequireUppercaseCharacters()
 * @method string getMaxPasswordAge()
 * @method string getMaxLoginAttemps()
 * @method string getHardExpiry()
 * @method string getMinimumPasswordLength()
 * @method string getRequireLowercaseCharacters()
 * @method string getRequireSymbols()
 */
class SetPasswordPolicyRequest extends \RpcAcsRequest
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
            'SetPasswordPolicy',
            'ram'
        );
    }

    /**
     * @param string $requireNumbers
     *
     * @return $this
     */
    public function setRequireNumbers($requireNumbers)
    {
        $this->requestParameters['RequireNumbers'] = $requireNumbers;
        $this->queryParameters['RequireNumbers'] = $requireNumbers;

        return $this;
    }

    /**
     * @param string $passwordReusePrevention
     *
     * @return $this
     */
    public function setPasswordReusePrevention($passwordReusePrevention)
    {
        $this->requestParameters['PasswordReusePrevention'] = $passwordReusePrevention;
        $this->queryParameters['PasswordReusePrevention'] = $passwordReusePrevention;

        return $this;
    }

    /**
     * @param string $requireUppercaseCharacters
     *
     * @return $this
     */
    public function setRequireUppercaseCharacters($requireUppercaseCharacters)
    {
        $this->requestParameters['RequireUppercaseCharacters'] = $requireUppercaseCharacters;
        $this->queryParameters['RequireUppercaseCharacters'] = $requireUppercaseCharacters;

        return $this;
    }

    /**
     * @param string $maxPasswordAge
     *
     * @return $this
     */
    public function setMaxPasswordAge($maxPasswordAge)
    {
        $this->requestParameters['MaxPasswordAge'] = $maxPasswordAge;
        $this->queryParameters['MaxPasswordAge'] = $maxPasswordAge;

        return $this;
    }

    /**
     * @param string $maxLoginAttemps
     *
     * @return $this
     */
    public function setMaxLoginAttemps($maxLoginAttemps)
    {
        $this->requestParameters['MaxLoginAttemps'] = $maxLoginAttemps;
        $this->queryParameters['MaxLoginAttemps'] = $maxLoginAttemps;

        return $this;
    }

    /**
     * @param string $hardExpiry
     *
     * @return $this
     */
    public function setHardExpiry($hardExpiry)
    {
        $this->requestParameters['HardExpiry'] = $hardExpiry;
        $this->queryParameters['HardExpiry'] = $hardExpiry;

        return $this;
    }

    /**
     * @param string $minimumPasswordLength
     *
     * @return $this
     */
    public function setMinimumPasswordLength($minimumPasswordLength)
    {
        $this->requestParameters['MinimumPasswordLength'] = $minimumPasswordLength;
        $this->queryParameters['MinimumPasswordLength'] = $minimumPasswordLength;

        return $this;
    }

    /**
     * @param string $requireLowercaseCharacters
     *
     * @return $this
     */
    public function setRequireLowercaseCharacters($requireLowercaseCharacters)
    {
        $this->requestParameters['RequireLowercaseCharacters'] = $requireLowercaseCharacters;
        $this->queryParameters['RequireLowercaseCharacters'] = $requireLowercaseCharacters;

        return $this;
    }

    /**
     * @param string $requireSymbols
     *
     * @return $this
     */
    public function setRequireSymbols($requireSymbols)
    {
        $this->requestParameters['RequireSymbols'] = $requireSymbols;
        $this->queryParameters['RequireSymbols'] = $requireSymbols;

        return $this;
    }
}
