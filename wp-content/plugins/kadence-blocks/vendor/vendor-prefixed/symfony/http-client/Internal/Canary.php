<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by kadencewp on 11-January-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace KadenceWP\KadenceBlocks\Symfony\Component\HttpClient\Internal;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class Canary
{
    private $canceller;

    public function __construct(\Closure $canceller)
    {
        $this->canceller = $canceller;
    }

    public function cancel()
    {
        if (($canceller = $this->canceller) instanceof \Closure) {
            $this->canceller = null;
            $canceller();
        }
    }

    public function __destruct()
    {
        $this->cancel();
    }
}
