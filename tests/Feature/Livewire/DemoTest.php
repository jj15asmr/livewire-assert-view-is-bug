<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Demo;
use Livewire\Livewire;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class DemoTest extends TestCase
{
    #[Test]
    public function it_has_the_expected_view(): void
    {
        Livewire::test(Demo::class)
            ->assertViewIs('livewire.demo');
    }
}
