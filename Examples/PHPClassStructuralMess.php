<?php

/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to https://www.fcamara.com.br/ for more information.
 *
 * @Agency    FCamara Formação e Consultoria, Inc. (http://www.fcamara.com.br)
 * @author    FCamara Core Team <magento@fcamara.com.br>
 */

namespace FCamara\Module\Framework;

/**
 * Provide a demonstration of a class which does not adhere to the FCamara standards.
 */
class Example
    extends AbstractExample
{
    private $enabled = false;

    public $config = [];

    /**
     * Set the enablement status.
     *
     * @param boolean $state
     * @return boolean
     */
    public function setState(bool $state = true)
    {
        $this->enabled = $state;

        return $state;
    }

    /**
     * Sanitize the given input.
     *
     * @param string $input
     * @return string
     */
    private function sanitize($input)
    {
        return strip_tags($input);
    }

    /**
     * Get a config value.
     *
     * @param string $key
     * @return mixed|null
     */
    protected function _getConfig($key)
    {
        return isset($this->config[$key]) ? $this->config[$key] : null;
    }

    /**
     * Public accessor for config retrieval.
     *
     * @param string $key
     * @return mixed|null
     */
    public function getConfig($key)
    {
        return $this->_getConfig($key);
    }

    /**
     * Set a config value.
     *
     * @param string $key
     * @param string|null $value
     * @return void
     */
    public function setConfig($key, $value = null)
    {
        $this->config[$key] = $this->sanitize($value);
    }
}
