<?php

namespace xspace\Request\V20170720;

/**
 * Request of QueryCustomerByPhone
 *
 * @method string getPhone()
 */
class QueryCustomerByPhoneRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/customerbyphone';

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
            'xspace',
            '2017-07-20',
            'QueryCustomerByPhone'
        );
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->requestParameters['Phone'] = $phone;
        $this->queryParameters['Phone'] = $phone;

        return $this;
    }
}
