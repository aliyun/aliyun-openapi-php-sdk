<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of GetServiceInputMapping
 *
 * @method string getShowLatestData()
 * @method string getLimit()
 * @method string getServiceId()
 * @method string getAlgorithmId()
 */
class GetServiceInputMappingRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'industry-brain',
            '2018-07-12',
            'GetServiceInputMapping'
        );
    }

    /**
     * @param string $showLatestData
     *
     * @return $this
     */
    public function setShowLatestData($showLatestData)
    {
        $this->requestParameters['ShowLatestData'] = $showLatestData;
        $this->queryParameters['ShowLatestData'] = $showLatestData;

        return $this;
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->requestParameters['Limit'] = $limit;
        $this->queryParameters['Limit'] = $limit;

        return $this;
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

    /**
     * @param string $algorithmId
     *
     * @return $this
     */
    public function setAlgorithmId($algorithmId)
    {
        $this->requestParameters['AlgorithmId'] = $algorithmId;
        $this->queryParameters['AlgorithmId'] = $algorithmId;

        return $this;
    }
}
