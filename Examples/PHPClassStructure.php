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

use FCamara\Module\Framework\ExampleObject;

/**
 * Provide gold-standard demonstration for PHP class structures.
 *
 * The class description should be concise, but in case more description is needed, a secondary larger paragraph may be
 * used to better explain your purpose.
 */
class Example extends AbstractExample implements ExampleInterface
{
    const  MODE_A0 = 1;
    const  MODE_B0 = 2;
    const  MODE_X0 = 3;

    /** @var bool */
    public $state;

    /** @var int */
    protected $mode;

    /**
     * The object is used to generate a result.
     *
     * @var ExampleObject
     */
    protected $object;

    /** @var array */
    private $config = [];

    /**
     * @param array $config
     * @param ExampleObject $object
     * @param boolean $state
     * @param integer $mode
     * @return void
     */
    public function __construct(
        array $config,
        ExampleObject $object,
        bool $state = true,
        int $mode = self::MODE_B0
    ) {
        $this->config = $this->normalizeConfig($config);
        $this->object = $object;
        $this->mode = $mode;
        $this->state = $state;
    }

    /**
     * Get the current mode of operation.
     *
     * @return integer
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Get the current feature state.
     *
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the current mode of operation.
     *
     * @param integer $mode
     * @return void
     */
    public function setMode(int $mode)
    {
        $this->mode = $mode;
    }

    /**
     * Set the current feature state.
     *
     * @param boolean $state
     * @return void
     */
    public function setState(bool $state)
    {
        $this->state = $state;
    }

    /**
     * Execute the object functionality.
     *
     * @return boolean
     */
    public function run()
    {
        $this->prepare();

        return $this->object->getResult();
    }

    /**
     * Sanitize the given configuration data.
     *
     * @param array $config
     * @return array
     */
    private function normalizeConfig(array $config)
    {
        $result = [];

        foreach ($config as $key => $value) {
            $result[strtolower($key)] = trim($value);
        }

        return $result;
    }

    /**
     * Prepare feature operations.
     *
     * Here also a secondary paragraph may be used to describe a more complex process or method function.
     *
     * @return void
     */
    private function prepare()
    {
        $this->object->container = $this;
        $this->object->config = $this->config;
        $this->object->mode = $this->mode;
        $this->object->id = uniqid();
    }
}
