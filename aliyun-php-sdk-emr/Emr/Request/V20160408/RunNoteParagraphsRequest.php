<?php

namespace Emr\Request\V20160408;

/**
 * Request of RunNoteParagraphs
 *
 * @method string getResourceOwnerId()
 * @method string getNoteId()
 */
class RunNoteParagraphsRequest extends \RpcAcsRequest
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
            'RunNoteParagraphs',
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
}
