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
namespace FCamara\Module\Plugin;

/**
 * Class InterceptorStructure
 *
 * @see InterceptedClass Intercepted class
 */
class InterceptorStructure
{
    /**
     * Before set Name
     *
     * @see InterceptedClass::setName() Intercepted method
     * @param object $subject
     * @param mixed ...$parameters
     * @return array
     */
    public function beforeSetName($subject, ...$parameters)
    {
        return $parameters;
    }

    /**
     * After set Name
     *
     * @see InterceptedClass::setName() Intercepted method
     * @param object $subject
     * @param mixed $result
     * @return mixed
     */
    public function afterSetName($subject, $result)
    {
        return $result;
    }

    /**
     * Around set Name
     *
     * @see InterceptedClass::setName() Intercepted method
     * @param object $subject
     * @param callable $super
     * @param mixed ...$parameters
     * @return mixed
     */
    public function aroundSetName($subject, callable $super, ...$parameters)
    {
        return $super(...$parameters);
    }

    /**
     * Looks like an intercepted method but isn't
     *
     * @return void
     */
    private function beforeDoingSomething()
    {
        echo 'Not actually an intercepted method';
    }

    /**
     * Doesn't look like an intercepted method
     *
     * @return void
     */
    private function doingSomethingElse()
    {
        echo 'Not an intercepted method';
    }
}
