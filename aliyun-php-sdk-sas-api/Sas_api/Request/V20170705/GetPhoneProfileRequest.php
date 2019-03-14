<?php

namespace Sas_api\Request\V20170705;

/**
 * Request of GetPhoneProfile
 *
 * @method string getPhone()
 * @method string getSensType()
 * @method string getDataVersion()
 * @method string getBusinessType()
 */
class GetPhoneProfileRequest extends \RpcAcsRequest
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
            'Sas-api',
            '2017-07-05',
            'GetPhoneProfile',
            'sas-api'
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

    /**
     * @param string $sensType
     *
     * @return $this
     */
    public function setSensType($sensType)
    {
        $this->requestParameters['SensType'] = $sensType;
        $this->queryParameters['SensType'] = $sensType;

        return $this;
    }

    /**
     * @param string $dataVersion
     *
     * @return $this
     */
    public function setDataVersion($dataVersion)
    {
        $this->requestParameters['DataVersion'] = $dataVersion;
        $this->queryParameters['DataVersion'] = $dataVersion;

        return $this;
    }

    /**
     * @param string $businessType
     *
     * @return $this
     */
    public function setBusinessType($businessType)
    {
        $this->requestParameters['BusinessType'] = $businessType;
        $this->queryParameters['BusinessType'] = $businessType;

        return $this;
    }
}
