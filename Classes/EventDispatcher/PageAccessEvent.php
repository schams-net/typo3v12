<?php
declare(strict_types=1);
namespace SchamsNet\Typo3v12\EventDispatcher;

/**
 * TYPO3 v12 Test Extension
 * @author Michael Schams | https://schams.net
 */

use TYPO3\CMS\Core\Attribute\RemoteEvent;

#[RemoteEvent(description: 'Page access event')]
final class PageAccessEvent
{
    /**
     * Paths
     */
    private ?int $timestamp;

    /**
     * Page ID
     */
    private ?int $pageId;

    /**
     * Constructor
     */
    public function __construct(?int $timestamp, ?int $pageId)
    {
        $this->timestamp = $timestamp;
        $this->pageId = $pageId;
    }

    /**
     * Get timestamp
     */
    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    /**
     * Get page ID
     */
    public function getPageId(): ?int
    {
        return $this->pageId;
    }
}
