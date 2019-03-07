<?php

namespace Actiontrail\Request\V20171204;

/**
 * Request of DescribeTrails
 *
 * @method string getNameList()
 * @method string getIncludeShadowTrails()
 */
class DescribeTrailsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Actiontrail',
            '2017-12-04',
            'DescribeTrails',
            'actiontrail'
        );
    }

    /**
     * @param string $nameList
     *
     * @return $this
     */
    public function setNameList($nameList)
    {
        $this->requestParameters['NameList'] = $nameList;
        $this->queryParameters['NameList'] = $nameList;

        return $this;
    }

    /**
     * @param string $includeShadowTrails
     *
     * @return $this
     */
    public function setIncludeShadowTrails($includeShadowTrails)
    {
        $this->requestParameters['IncludeShadowTrails'] = $includeShadowTrails;
        $this->queryParameters['IncludeShadowTrails'] = $includeShadowTrails;

        return $this;
    }
}
