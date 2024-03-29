<?php

declare(strict_types=1);

/*
 * This file is part of the Modelflow AI package.
 *
 * (c) Johannes Wachter <johannes@sulu.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ModelflowAi\Core;

use ModelflowAi\Core\Request\Builder\AIChatRequestBuilder;
use ModelflowAi\Core\Request\Builder\AICompletionRequestBuilder;
use ModelflowAi\Core\Request\Message\AIChatMessage;

interface AIRequestHandlerInterface
{
    public function createCompletionRequest(?string $prompt = null): AICompletionRequestBuilder;

    public function createChatRequest(AIChatMessage ...$messages): AIChatRequestBuilder;
}
