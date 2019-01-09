<?php

namespace imm\Request\V20170906;

/**
 * Request of GetFaceSetDetail
 *
 * @method string getMarker()
 * @method string getProject()
 * @method string getSetId()
 * @method string getReturnAttribute()
 */
class GetFaceSetDetailRequest extends \RpcAcsRequest
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
            'GetFaceSetDetail',
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
     * @param string $returnAttribute
     *
     * @return $this
     */
    public function setReturnAttribute($returnAttribute)
    {
        $this->requestParameters['ReturnAttribute'] = $returnAttribute;
        $this->queryParameters['ReturnAttribute'] = $returnAttribute;

        return $this;
    }
}
