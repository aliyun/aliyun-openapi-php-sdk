<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of ToggleFeatures
 *
 * @method array getDisabledFeaturess()
 * @method string getStoreName()
 * @method array getEnabledFeaturess()
 */
class ToggleFeaturesRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'CloudPhoto',
            '2017-07-11',
            'ToggleFeatures',
            'cloudphoto'
        );
    }

    /**
     * @param array $disabledFeaturess
     *
     * @return $this
     */
    public function setDisabledFeaturess(array $disabledFeaturess)
    {
        $this->requestParameters['DisabledFeaturess'] = $disabledFeaturess;
        foreach ($disabledFeaturess as $i => $iValue) {
            $this->queryParameters['DisabledFeatures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->requestParameters['StoreName'] = $storeName;
        $this->queryParameters['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param array $enabledFeaturess
     *
     * @return $this
     */
    public function setEnabledFeaturess(array $enabledFeaturess)
    {
        $this->requestParameters['EnabledFeaturess'] = $enabledFeaturess;
        foreach ($enabledFeaturess as $i => $iValue) {
            $this->queryParameters['EnabledFeatures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
