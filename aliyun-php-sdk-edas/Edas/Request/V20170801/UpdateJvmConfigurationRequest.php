<?php

namespace Edas\Request\V20170801;

/**
 * Request of UpdateJvmConfiguration
 *
 * @method string getMinHeapSize()
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getOptions()
 * @method string getMaxPermSize()
 * @method string getMaxHeapSize()
 */
class UpdateJvmConfigurationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/app/app_jvm_config';

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
            'Edas',
            '2017-08-01',
            'UpdateJvmConfiguration'
        );
    }

    /**
     * @param string $minHeapSize
     *
     * @return $this
     */
    public function setMinHeapSize($minHeapSize)
    {
        $this->requestParameters['MinHeapSize'] = $minHeapSize;
        $this->queryParameters['MinHeapSize'] = $minHeapSize;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->requestParameters['Options'] = $options;
        $this->queryParameters['Options'] = $options;

        return $this;
    }

    /**
     * @param string $maxPermSize
     *
     * @return $this
     */
    public function setMaxPermSize($maxPermSize)
    {
        $this->requestParameters['MaxPermSize'] = $maxPermSize;
        $this->queryParameters['MaxPermSize'] = $maxPermSize;

        return $this;
    }

    /**
     * @param string $maxHeapSize
     *
     * @return $this
     */
    public function setMaxHeapSize($maxHeapSize)
    {
        $this->requestParameters['MaxHeapSize'] = $maxHeapSize;
        $this->queryParameters['MaxHeapSize'] = $maxHeapSize;

        return $this;
    }
}
