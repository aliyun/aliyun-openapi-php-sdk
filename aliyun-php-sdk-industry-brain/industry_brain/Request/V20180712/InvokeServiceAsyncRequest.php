<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of InvokeServiceAsync
 *
 * @method string getIsShowInput()
 * @method string getServiceId()
 * @method string getParams()
 * @method string getRequestData()
 */
class InvokeServiceAsyncRequest extends \RpcAcsRequest
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
            'InvokeServiceAsync'
        );
    }

    /**
     * @param string $isShowInput
     *
     * @return $this
     */
    public function setIsShowInput($isShowInput)
    {
        $this->requestParameters['IsShowInput'] = $isShowInput;
        $this->queryParameters['IsShowInput'] = $isShowInput;

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
     * @param string $params
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->requestParameters['Params'] = $params;
        $this->queryParameters['Params'] = $params;

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
}
