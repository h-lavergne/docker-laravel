<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\HomeController;

class SiteTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider()
    {
        $dataset = [];
        for ($count = 1; $count <= 20; $count++) {
            $a = random_int(0, 10000);
            $b = random_int(0, 10000);
            $dataset[] = [$a, $b, $a + $b];
        }
        return $dataset;
    }

    /**
     * @dataProvider substractProvider
     */
    public function testSubstract($a, $b, $expected)
    {
        $this->assertSame($expected, $a - $b);
    }
    
    public function substractProvider()
    {
        $dataset = [];
        for ($count = 1; $count <= 20; $count++) {
            $a = random_int(0, 10000);
            $b = random_int(0, 10000);
            $dataset[] = [$a, $b, $a - $b];
        }
        return $dataset;
    }

    public function testPushAndPop()
    {
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack) - 1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
    }
}
