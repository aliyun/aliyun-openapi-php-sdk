<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeSiteMonitorISPCityList
 *
 * @method string getCity()
 * @method string getIsp()
 */
class DescribeSiteMonitorISPCityListRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'DescribeSiteMonitorISPCityList',
            'cms'
        );
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->requestParameters['City'] = $city;
        $this->queryParameters['City'] = $city;

        return $this;
    }

    /**
     * @param string $isp
     *
     * @return $this
     */
    public function setIsp($isp)
    {
        $this->requestParameters['Isp'] = $isp;
        $this->queryParameters['Isp'] = $isp;

        return $this;
    }
}
