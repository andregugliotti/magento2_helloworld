<?php
/**
 * Gugliotti_Helloworld
 */
namespace Gugliotti\Helloworld\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\AbstractHelper;

/**
 * Class Data
 *
 * Main Helper.
 * @author Andre Gugliotti <andre@gugliotti.com.br>
 * @version 0.1.0
 * @license GNU General Public License, version 3
 * @package Gugliotti\Helloworld\Helper
 */
class Data extends AbstractHelper
{
    /**
     * getConfigData
     *
     * @param string $path
     * @param string $scope
     * @return mixed
     */
    public function getConfigData($path, $scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        // gets the config value and returns it
        return $this->scopeConfig->getValue(
            'gugliotti_helloworld/' . $path,
            $scope
        );
    }

    /**
     * isEnabled
     *
     * Returns true if this module is enabled.
     * @param string $scope
     * @return bool
     */
    public function isEnabled($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        // gets the enabled config and returns it as a boolean
        return $this->scopeConfig->isSetFlag(
            'gugliotti_helloworld/general/enabled',
            $scope
        );
    }
}
