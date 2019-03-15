<?php

namespace Crm\Request\V20150408;

/**
 * Request of AddIdentityCertifiedForBidUser
 *
 * @method string getBidType()
 * @method string getLicenseNumber()
 * @method string getLicenseType()
 * @method string getPhone()
 * @method string getName()
 * @method string getPK()
 * @method string getIsEnterprise()
 */
class AddIdentityCertifiedForBidUserRequest extends \RpcAcsRequest
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
            'Crm',
            '2015-04-08',
            'AddIdentityCertifiedForBidUser',
            'crm'
        );
    }

    /**
     * @param string $bidType
     *
     * @return $this
     */
    public function setBidType($bidType)
    {
        $this->requestParameters['BidType'] = $bidType;
        $this->queryParameters['BidType'] = $bidType;

        return $this;
    }

    /**
     * @param string $licenseNumber
     *
     * @return $this
     */
    public function setLicenseNumber($licenseNumber)
    {
        $this->requestParameters['LicenseNumber'] = $licenseNumber;
        $this->queryParameters['LicenseNumber'] = $licenseNumber;

        return $this;
    }

    /**
     * @param string $licenseType
     *
     * @return $this
     */
    public function setLicenseType($licenseType)
    {
        $this->requestParameters['LicenseType'] = $licenseType;
        $this->queryParameters['LicenseType'] = $licenseType;

        return $this;
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

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $pK
     *
     * @return $this
     */
    public function setPK($pK)
    {
        $this->requestParameters['PK'] = $pK;
        $this->queryParameters['PK'] = $pK;

        return $this;
    }

    /**
     * @param string $isEnterprise
     *
     * @return $this
     */
    public function setIsEnterprise($isEnterprise)
    {
        $this->requestParameters['IsEnterprise'] = $isEnterprise;
        $this->queryParameters['IsEnterprise'] = $isEnterprise;

        return $this;
    }
}
