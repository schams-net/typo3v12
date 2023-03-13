<?php
declare(strict_types=1);
namespace SchamsNet\Typo3v12\Controller;

/**
 * TYPO3 v12 Test Extension
 * @author Michael Schams | https://schams.net
 */

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use SchamsNet\Typo3v12\EventDispatcher\PageAccessEvent;

class ExampleController extends ActionController
{
    /**
     *
     */
    public function mainAction(): ResponseInterface
    {
        // Get current page ID
        $pageArguments = $this->request->getAttribute('routing');
        $pageId = $pageArguments->getPageId();

        // Get current timestamp
        $timestamp = time();

        // Dispatch event
        $event = $this->eventDispatcher->dispatch(
            new PageAccessEvent($timestamp, $pageId)
        );
        $pageId = $event->getPageId();
        
        $this->view->assign('pageId', $pageId);
        $this->view->assign('timestamp', $timestamp);

        return $this->htmlResponse();
    }
}
