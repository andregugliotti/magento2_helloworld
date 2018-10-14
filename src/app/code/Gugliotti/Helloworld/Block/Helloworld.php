<?php
/**
 * Gugliotti_Helloworld
 */
namespace Gugliotti\Helloworld\Block;

use Gugliotti\Helloworld\Helper\Data;
use \Magento\Framework\View\Element\Template;

/**
 * Class Helloworld
 *
 * Hello World Block.
 * @author Andre Gugliotti <andre@gugliotti.com.br>
 * @version 0.1.0
 * @license GNU General Public License, version 3
 * @package Gugliotti\Helloworld\Block
 */
class Helloworld extends Template
{
    /**
     * @var $helper
     */
    protected $helper;

    public function __construct(
        Data $helper,
        Template\Context $context,
        array $data = []
    )
    {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * isEnabled
     *
     * Returns true if this module is enabled.
     * @return bool
     */
    public function isEnabled()
    {
        return $this->helper->isEnabled();
    }

    /**
     * getMessage
     * @return string
     */
    public function getMessage()
    {
        return $this->helper->getConfigData('general/message');
    }
}
