<?php

namespace Ram\Request\V20150501;

/**
 * Request of SetAccountAlias
 *
 * @method string getAccountAlias()
 */
class SetAccountAliasRequest extends \RpcAcsRequest
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
            'SetAccountAlias',
            'ram'
        );
    }

    /**
     * @param string $accountAlias
     *
     * @return $this
     */
    public function setAccountAlias($accountAlias)
    {
        $this->requestParameters['AccountAlias'] = $accountAlias;
        $this->queryParameters['AccountAlias'] = $accountAlias;

        return $this;
    }
}
