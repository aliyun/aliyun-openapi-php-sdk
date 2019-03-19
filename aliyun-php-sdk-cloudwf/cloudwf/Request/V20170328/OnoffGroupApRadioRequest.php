<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of OnoffGroupApRadio
 *
 * @method string getApgroupId()
 * @method string getDisabled()
 */
class OnoffGroupApRadioRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'OnoffGroupApRadio',
            'cloudwf'
        );
    }

    /**
     * @param string $apgroupId
     *
     * @return $this
     */
    public function setApgroupId($apgroupId)
    {
        $this->requestParameters['ApgroupId'] = $apgroupId;
        $this->queryParameters['ApgroupId'] = $apgroupId;

        return $this;
    }

    /**
     * @param string $disabled
     *
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->requestParameters['Disabled'] = $disabled;
        $this->queryParameters['Disabled'] = $disabled;

        return $this;
    }
}
