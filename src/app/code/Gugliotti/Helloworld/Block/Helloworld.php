<?php
/**
 * Gugliotti_Helloworld
 */
namespace Gugliotti\Helloworld\Block;

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
     * getMessage
     * @return string
     */
    public function getMessage()
    {
        return "Temporary Hello World Message";
    }
}
