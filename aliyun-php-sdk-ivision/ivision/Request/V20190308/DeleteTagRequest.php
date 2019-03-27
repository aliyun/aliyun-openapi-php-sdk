<?php

namespace ivision\Request\V20190308;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteTag
 *
 * @method string getProjectId()
 * @method string getShowLog()
 * @method string getTagId()
 * @method string getOwnerId()
 */
class DeleteTagRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ivision',
            '2019-03-08',
            'DeleteTag',
            'ivision'
        );
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }

    /**
     * @param string $showLog
     *
     * @return $this
     */
    public function setShowLog($showLog)
    {
        $this->requestParameters['ShowLog'] = $showLog;
        $this->queryParameters['ShowLog'] = $showLog;

        return $this;
    }

    /**
     * @param string $tagId
     *
     * @return $this
     */
    public function setTagId($tagId)
    {
        $this->requestParameters['TagId'] = $tagId;
        $this->queryParameters['TagId'] = $tagId;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
