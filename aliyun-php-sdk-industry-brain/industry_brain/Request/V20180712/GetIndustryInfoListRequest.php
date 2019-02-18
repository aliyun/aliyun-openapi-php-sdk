<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of GetIndustryInfoList
 *
 */
class GetIndustryInfoListRequest extends \RpcAcsRequest
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
            'GetIndustryInfoList'
        );
    }
}
