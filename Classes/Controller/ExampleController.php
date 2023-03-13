<?php
declare(strict_types=1);
namespace SchamsNet\Typo3v12\Controller;

/**
 * TYPO3 v12 Test Extension
 * @author Michael Schams | https://schams.net
 */

use \Psr\Http\Message\ResponseInterface;
use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ExampleController extends ActionController
{
    /**
     *
     */
    public function mainAction(): ResponseInterface
    {
        $this->view->assign('timestamp', time());
        return $this->htmlResponse();
    }
}
