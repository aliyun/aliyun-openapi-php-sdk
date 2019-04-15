<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyScreenSetting
 *
 * @method string getSourceIp()
 * @method string getScreenTitle()
 * @method string getScreenIdSetting()
 */
class ModifyScreenSettingRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'ModifyScreenSetting',
            'vipaegis'
        );
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $screenTitle
     *
     * @return $this
     */
    public function setScreenTitle($screenTitle)
    {
        $this->requestParameters['ScreenTitle'] = $screenTitle;
        $this->queryParameters['ScreenTitle'] = $screenTitle;

        return $this;
    }

    /**
     * @param string $screenIdSetting
     *
     * @return $this
     */
    public function setScreenIdSetting($screenIdSetting)
    {
        $this->requestParameters['ScreenIdSetting'] = $screenIdSetting;
        $this->queryParameters['ScreenIdSetting'] = $screenIdSetting;

        return $this;
    }
}
