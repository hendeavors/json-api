<?php namespace Neomerx\JsonApi\Contracts\Encoder\Handlers;

/**
 * Copyright 2015 info@neomerx.com (www.neomerx.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed for in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

use \Neomerx\JsonApi\Contracts\Document\DocumentInterface;
use \Neomerx\JsonApi\Contracts\Parameters\EncodingParametersInterface;

/**
 * @package Neomerx\JsonApi
 */
interface HandlerFactoryInterface
{
    /**
     * Create parser reply interpreter.
     *
     * @param DocumentInterface                $document
     * @param EncodingParametersInterface|null $parameters
     *
     * @return ReplyInterpreterInterface
     */
    public function createReplyInterpreter(DocumentInterface $document, EncodingParametersInterface $parameters = null);
}
