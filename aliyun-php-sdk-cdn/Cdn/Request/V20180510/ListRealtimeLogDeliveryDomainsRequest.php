<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListRealtimeLogDeliveryDomains
 *
 * @method string getProject()
 * @method string getOwnerId()
 * @method string getRegion()
 * @method string getLogstore()
 */
class ListRealtimeLogDeliveryDomainsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cdn',
            '2018-05-10',
            'ListRealtimeLogDeliveryDomains'
        );
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

        return $this;
    }

    /**
     * @param string $logstore
     *
     * @return $this
     */
    public function setLogstore($logstore)
    {
        $this->requestParameters['Logstore'] = $logstore;
        $this->queryParameters['Logstore'] = $logstore;

        return $this;
    }
}
