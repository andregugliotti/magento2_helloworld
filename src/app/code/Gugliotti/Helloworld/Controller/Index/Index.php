<?php
/**
 * Gugliotti_Helloworld
 */
namespace Gugliotti\Helloworld\Controller\Index;

use Gugliotti\Helloworld\Helper\Data;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 *
 * Index Controller.
 * @author Andre Gugliotti <andre@gugliotti.com.br>
 * @version 0.1.0
 * @license GNU General Public License, version 3
 * @package Gugliotti\Helloworld\Controller\Index
 */
class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * @var $helper
     */
    protected $helper;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        Data $helper
    )
    {
        $this->pageFactory = $pageFactory;
        $this->helper = $helper;
        parent::__construct($context);
    }

    /**
     * execute
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        // verify if this module is enabled and redirect to home
        if (!$this->helper->isEnabled()) {
            return $this->_redirect('');
        }

        // create page and adds a title
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set((__('The Hello World Module for Magento 2')));
        return $page;
    }
}
