<?php

namespace Emr\Request\V20160408;

/**
 * Request of StopParagraph
 *
 * @method string getResourceOwnerId()
 * @method string getNoteId()
 * @method string getId()
 */
class StopParagraphRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'StopParagraph',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $noteId
     *
     * @return $this
     */
    public function setNoteId($noteId)
    {
        $this->requestParameters['NoteId'] = $noteId;
        $this->queryParameters['NoteId'] = $noteId;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }
}
