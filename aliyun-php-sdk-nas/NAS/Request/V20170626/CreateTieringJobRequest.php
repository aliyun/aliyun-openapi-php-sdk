<?php

namespace NAS\Request\V20170626;

/**
 * Request of CreateTieringJob
 *
 * @method string getVolume()
 * @method string getPath()
 * @method string getHour()
 * @method string getName()
 * @method string getWeekday()
 * @method string getType()
 * @method string getRecursive()
 * @method string getEnabled()
 * @method string getPolicy()
 */
class CreateTieringJobRequest extends \RpcAcsRequest
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
            'NAS',
            '2017-06-26',
            'CreateTieringJob',
            'nas'
        );
    }

    /**
     * @param string $volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->requestParameters['Volume'] = $volume;
        $this->queryParameters['Volume'] = $volume;

        return $this;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->requestParameters['Path'] = $path;
        $this->queryParameters['Path'] = $path;

        return $this;
    }

    /**
     * @param string $hour
     *
     * @return $this
     */
    public function setHour($hour)
    {
        $this->requestParameters['Hour'] = $hour;
        $this->queryParameters['Hour'] = $hour;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $weekday
     *
     * @return $this
     */
    public function setWeekday($weekday)
    {
        $this->requestParameters['Weekday'] = $weekday;
        $this->queryParameters['Weekday'] = $weekday;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $recursive
     *
     * @return $this
     */
    public function setRecursive($recursive)
    {
        $this->requestParameters['Recursive'] = $recursive;
        $this->queryParameters['Recursive'] = $recursive;

        return $this;
    }

    /**
     * @param string $enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->requestParameters['Enabled'] = $enabled;
        $this->queryParameters['Enabled'] = $enabled;

        return $this;
    }

    /**
     * @param string $policy
     *
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->requestParameters['Policy'] = $policy;
        $this->queryParameters['Policy'] = $policy;

        return $this;
    }
}
