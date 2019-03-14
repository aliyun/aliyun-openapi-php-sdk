<?php

namespace cr\Request\V20160607;

/**
 * Request of UpdateRepoWebhook
 *
 * @method string getRepoNamespace()
 * @method string getWebhookId()
 * @method string getRepoName()
 */
class UpdateRepoWebhookRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/repos/[RepoNamespace]/[RepoName]/webhooks/[WebhookId]';

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
            'cr',
            '2016-06-07',
            'UpdateRepoWebhook',
            'cr'
        );
    }

    /**
     * @param string $repoNamespace
     *
     * @return $this
     */
    public function setRepoNamespace($repoNamespace)
    {
        $this->requestParameters['RepoNamespace'] = $repoNamespace;
        $this->pathParameters['RepoNamespace'] = $repoNamespace;

        return $this;
    }

    /**
     * @param string $webhookId
     *
     * @return $this
     */
    public function setWebhookId($webhookId)
    {
        $this->requestParameters['WebhookId'] = $webhookId;
        $this->pathParameters['WebhookId'] = $webhookId;

        return $this;
    }

    /**
     * @param string $repoName
     *
     * @return $this
     */
    public function setRepoName($repoName)
    {
        $this->requestParameters['RepoName'] = $repoName;
        $this->pathParameters['RepoName'] = $repoName;

        return $this;
    }
}
