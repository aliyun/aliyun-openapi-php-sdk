<?php

namespace aegis\Request\V20161111;

/**
 * Request of ModifyWebLockCreateConfig
 *
 * @method string getLocalBackupDir()
 * @method string getSourceIp()
 * @method string getExclusiveFileType()
 * @method string getLang()
 * @method string getDir()
 * @method string getUuid()
 * @method string getExclusiveDir()
 */
class ModifyWebLockCreateConfigRequest extends \RpcAcsRequest
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
            'ModifyWebLockCreateConfig',
            'vipaegis'
        );
    }

    /**
     * @param string $localBackupDir
     *
     * @return $this
     */
    public function setLocalBackupDir($localBackupDir)
    {
        $this->requestParameters['LocalBackupDir'] = $localBackupDir;
        $this->queryParameters['LocalBackupDir'] = $localBackupDir;

        return $this;
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
     * @param string $exclusiveFileType
     *
     * @return $this
     */
    public function setExclusiveFileType($exclusiveFileType)
    {
        $this->requestParameters['ExclusiveFileType'] = $exclusiveFileType;
        $this->queryParameters['ExclusiveFileType'] = $exclusiveFileType;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $dir
     *
     * @return $this
     */
    public function setDir($dir)
    {
        $this->requestParameters['Dir'] = $dir;
        $this->queryParameters['Dir'] = $dir;

        return $this;
    }

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->requestParameters['Uuid'] = $uuid;
        $this->queryParameters['Uuid'] = $uuid;

        return $this;
    }

    /**
     * @param string $exclusiveDir
     *
     * @return $this
     */
    public function setExclusiveDir($exclusiveDir)
    {
        $this->requestParameters['ExclusiveDir'] = $exclusiveDir;
        $this->queryParameters['ExclusiveDir'] = $exclusiveDir;

        return $this;
    }
}
