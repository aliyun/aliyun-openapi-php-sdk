<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Dybaseapi\MNS\Requests;

class BatchReceiveMessageRequest extends BaseRequest
{
    private $queueName;
    private $numOfMessages;
    private $waitSeconds;

    public function __construct($numOfMessages, $waitSeconds = NULL)
    {
        parent::__construct('get', NULL);

        $this->queueName = NULL;
        $this->numOfMessages = $numOfMessages;
        $this->waitSeconds = $waitSeconds;
    }

    public function setQueueName($queueName)
    {
        $this->queueName = $queueName;
        $this->resourcePath = 'queues/' . $queueName . '/messages';
    }

    public function getQueueName()
    {
        return $this->queueName;
    }

    public function getWaitSeconds()
    {
        return $this->waitSeconds;
    }

    public function getNumOfMessages()
    {
        return $this->numOfMessages;
    }

    public function generateBody()
    {
        return NULL;
    }

    public function generateQueryString()
    {
        $params = array("NumOfMessages" => $this->numOfMessages);
        if ($this->waitSeconds != NULL)
        {
            $params["WaitSeconds"] = $this->waitSeconds;
        }
        return http_build_query($params);
    }
}
