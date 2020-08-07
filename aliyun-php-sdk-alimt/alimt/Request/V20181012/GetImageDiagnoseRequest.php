<?php

namespace alimt\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetImageDiagnose
 *
 * @method string getUrl()
 * @method string getExtra()
 */
class GetImageDiagnoseRequest extends \RpcAcsRequest
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
            'alimt',
            '2018-10-12',
            'GetImageDiagnose',
            'alimt'
        );
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->requestParameters['Url'] = $url;
        $this->queryParameters['Url'] = $url;

        return $this;
    }

    /**
     * @param string $extra
     *
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->requestParameters['Extra'] = $extra;
        $this->queryParameters['Extra'] = $extra;

        return $this;
    }
}
