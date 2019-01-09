<?php

namespace imm\Request\V20170906;

/**
 * Request of FindImagesByTagNames
 *
 * @method string getMarker()
 * @method string getProject()
 * @method string getSetId()
 * @method string getTagNames()
 */
class FindImagesByTagNamesRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'FindImagesByTagNames',
            'imm'
        );
    }

    /**
     * @param string $marker
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->requestParameters['Marker'] = $marker;
        $this->queryParameters['Marker'] = $marker;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        $this->requestParameters['SetId'] = $setId;
        $this->queryParameters['SetId'] = $setId;

        return $this;
    }

    /**
     * @param string $tagNames
     *
     * @return $this
     */
    public function setTagNames($tagNames)
    {
        $this->requestParameters['TagNames'] = $tagNames;
        $this->queryParameters['TagNames'] = $tagNames;

        return $this;
    }
}
