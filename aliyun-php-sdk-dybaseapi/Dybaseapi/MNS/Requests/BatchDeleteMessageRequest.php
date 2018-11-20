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

use Dybaseapi\MNS\Constants;

class BatchDeleteMessageRequest extends BaseRequest
{
    private $queueName;
    private $receiptHandles;

    public function __construct($queueName, array $receiptHandles)
    {
        parent::__construct('delete', 'queues/' . $queueName . '/messages');

        $this->queueName = $queueName;
        $this->receiptHandles = $receiptHandles;
    }

    public function getQueueName()
    {
        return $this->queueName;
    }

    public function getReceiptHandles()
    {
        return $this->receiptHandles;
    }

    public function generateBody()
    {
        $xmlWriter = new \XMLWriter;
        $xmlWriter->openMemory();
        $xmlWriter->startDocument("1.0", "UTF-8");
        $xmlWriter->startElementNS(NULL, Constants::RECEIPT_HANDLES, Constants::MNS_XML_NAMESPACE);
        foreach ($this->receiptHandles as $receiptHandle)
        {
            $xmlWriter->writeElement(Constants::RECEIPT_HANDLE, $receiptHandle);
        }
        $xmlWriter->endElement();
        $xmlWriter->endDocument();
        return $xmlWriter->outputMemory();
    }

    public function generateQueryString()
    {
        return NULL;
    }
}
