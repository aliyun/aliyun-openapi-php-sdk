<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of GetDataProperties
 *
 * @method string getServiceId()
 */
class GetDataPropertiesRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'industry-brain',
            '2018-07-12',
            'GetDataProperties'
        );
    }

    /**
     * @param string $serviceId
     *
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        $this->requestParameters['ServiceId'] = $serviceId;
        $this->queryParameters['ServiceId'] = $serviceId;

        return $this;
    }
}
