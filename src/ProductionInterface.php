<?php

/**
 * This file is part of Phplrt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phplrt\Contracts\Grammar;

use Phplrt\Parser\Buffer\BufferInterface;
use Phplrt\Contracts\Lexer\TokenInterface;

/**
 * Interface ProductionInterface
 */
interface ProductionInterface extends RuleInterface
{
    /**
     * @param BufferInterface $buffer
     * @param \Closure $reduce
     * @return TokenInterface|iterable|null
     */
    public function reduce(BufferInterface $buffer, \Closure $reduce);
}