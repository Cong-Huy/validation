<?php
/**
 * @link https://github.com/phpviet/validation
 * @copyright (c) PHP Viet
 * @license [MIT](https://opensource.org/licenses/MIT)
 */

namespace PHPViet\Validation;

use Respect\Validation\Validator as BaseValidator;
use Respect\Validation\Factory;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class Validator extends BaseValidator
{

    /**
     * @return Factory
     */
    protected static function getFactory()
    {
        if (!static::$factory instanceof Factory) {
            $factory = static::$factory = new Factory();
            $factory->prependRulePrefix('\\PHPViet\\Validation\\Rules\\');
        }

        return static::$factory;
    }

}
