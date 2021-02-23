<?php
/**
 * Mockery
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://github.com/padraic/mockery/blob/master/LICENSE
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to padraic@php.net so we can send you a copy immediately.
 *
 * @category   Mockery
 * @package    Mockery
 * @copyright  Copyright (c) 2010 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    http://github.com/padraic/mockery/blob/master/LICENSE New BSD License
 */

namespace Mockery\Adapter\Phpunit;

abstract class MockeryTestCase extends \PHPUnit\Framework\TestCase
{
    use MockeryPHPUnitIntegration;
    use MockeryTestCaseSetUp;

    protected function mockeryTestSetUp()
    {
    }

    protected function mockeryTestTearDown()
    {
    }

    public function expectExceptionMessageRegEx($regularExpression)
    {
        if (method_exists(get_parent_class(), 'expectExceptionMessageRegExp')) {
            return parent::expectExceptionMessageRegExp($regularExpression);
        }

        return $this->expectExceptionMessageMatches($regularExpression);
    }

    public static function assertMatchesRegEx($pattern, $string, $message = '')
    {
        if (method_exists(get_parent_class(), 'assertMatchesRegularExpression')) {
            parent::assertMatchesRegularExpression($pattern, $string, $message);
        }

        self::assertRegExp($pattern, $string, $message);
    }
}
