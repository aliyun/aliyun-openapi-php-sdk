<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of GetIndustryInfo
 *
 * @method string getIndustryCode()
 */
class GetIndustryInfoRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'industry-brain',
            '2018-07-12',
            'GetIndustryInfo'
        );
    }

    /**
     * @param string $industryCode
     *
     * @return $this
     */
    public function setIndustryCode($industryCode)
    {
        $this->requestParameters['IndustryCode'] = $industryCode;
        $this->queryParameters['IndustryCode'] = $industryCode;

        return $this;
    }
}
