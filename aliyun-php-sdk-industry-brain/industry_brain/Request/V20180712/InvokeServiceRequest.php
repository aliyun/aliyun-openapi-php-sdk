<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of InvokeService
 *
 * @method string getRequestParams()
 * @method string getServiceId()
 * @method string getRequestData()
 * @method string getShowParams()
 */
class InvokeServiceRequest extends \RpcAcsRequest
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
            'industry-brain',
            '2018-07-12',
            'InvokeService'
        );
    }

    /**
     * @param string $requestParams
     *
     * @return $this
     */
    public function setRequestParams($requestParams)
    {
        $this->requestParameters['RequestParams'] = $requestParams;
        $this->queryParameters['RequestParams'] = $requestParams;

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
     * @param string $requestData
     *
     * @return $this
     */
    public function setRequestData($requestData)
    {
        $this->requestParameters['RequestData'] = $requestData;
        $this->queryParameters['RequestData'] = $requestData;

        return $this;
    }

    /**
     * @param string $showParams
     *
     * @return $this
     */
    public function setShowParams($showParams)
    {
        $this->requestParameters['ShowParams'] = $showParams;
        $this->queryParameters['ShowParams'] = $showParams;

        return $this;
    }
}
