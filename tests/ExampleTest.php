<?php

namespace Gerbesf\TripaTheme\Tests;

use Orchestra\Testbench\TestCase;
use Gerbesf\TripaTheme\TripaThemeServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TripaThemeServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
