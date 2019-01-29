<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of DescribeUserRamPolicy
 *
 * @method string getCompanyId()
 * @method string getUserType()
 * @method string getStoreId()
 */
class DescribeUserRamPolicyRequest extends \RpcAcsRequest
{

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
            'cloudesl',
            '2018-08-01',
            'DescribeUserRamPolicy'
        );
    }

    /**
     * @param string $companyId
     *
     * @return $this
     */
    public function setCompanyId($companyId)
    {
        $this->requestParameters['CompanyId'] = $companyId;
        $this->queryParameters['CompanyId'] = $companyId;

        return $this;
    }

    /**
     * @param string $userType
     *
     * @return $this
     */
    public function setUserType($userType)
    {
        $this->requestParameters['UserType'] = $userType;
        $this->queryParameters['UserType'] = $userType;

        return $this;
    }

    /**
     * @param string $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->requestParameters['StoreId'] = $storeId;
        $this->queryParameters['StoreId'] = $storeId;

        return $this;
    }
}
