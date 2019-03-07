<?php

namespace Actiontrail\Request\V20171204;

/**
 * Request of CreateTrail
 *
 * @method string getSlsProjectArn()
 * @method string getSlsWriteRoleArn()
 * @method string getRoleName()
 * @method string getName()
 * @method string getOssBucketName()
 * @method string getOssKeyPrefix()
 * @method string getEventRW()
 */
class CreateTrailRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Actiontrail',
            '2017-12-04',
            'CreateTrail',
            'actiontrail'
        );
    }

    /**
     * @param string $slsProjectArn
     *
     * @return $this
     */
    public function setSlsProjectArn($slsProjectArn)
    {
        $this->requestParameters['SlsProjectArn'] = $slsProjectArn;
        $this->queryParameters['SlsProjectArn'] = $slsProjectArn;

        return $this;
    }

    /**
     * @param string $slsWriteRoleArn
     *
     * @return $this
     */
    public function setSlsWriteRoleArn($slsWriteRoleArn)
    {
        $this->requestParameters['SlsWriteRoleArn'] = $slsWriteRoleArn;
        $this->queryParameters['SlsWriteRoleArn'] = $slsWriteRoleArn;

        return $this;
    }

    /**
     * @param string $roleName
     *
     * @return $this
     */
    public function setRoleName($roleName)
    {
        $this->requestParameters['RoleName'] = $roleName;
        $this->queryParameters['RoleName'] = $roleName;

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
     * @param string $ossBucketName
     *
     * @return $this
     */
    public function setOssBucketName($ossBucketName)
    {
        $this->requestParameters['OssBucketName'] = $ossBucketName;
        $this->queryParameters['OssBucketName'] = $ossBucketName;

        return $this;
    }

    /**
     * @param string $ossKeyPrefix
     *
     * @return $this
     */
    public function setOssKeyPrefix($ossKeyPrefix)
    {
        $this->requestParameters['OssKeyPrefix'] = $ossKeyPrefix;
        $this->queryParameters['OssKeyPrefix'] = $ossKeyPrefix;

        return $this;
    }

    /**
     * @param string $eventRW
     *
     * @return $this
     */
    public function setEventRW($eventRW)
    {
        $this->requestParameters['EventRW'] = $eventRW;
        $this->queryParameters['EventRW'] = $eventRW;

        return $this;
    }
}
