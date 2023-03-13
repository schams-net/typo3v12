<?php
declare(strict_types=1);
namespace SchamsNet\Typo3v12\EventListener;

/**
 * TYPO3 v12 Test Extension
 * @author Michael Schams | https://schams.net
 */

use SchamsNet\Typo3v12\EventDispatcher\PageAccessEvent;

/**
 *
 */
class PageAccessListener
{
    /**
     *
     */
    public function __invoke(PageAccessEvent $event): void
    {
        $stream = fopen('debug.log', 'a');
        fputs($stream, time() . ': ' . __METHOD__ . PHP_EOL);
        fputs($stream, time() . ': ' . print_r($event, true). PHP_EOL);
    }
}
