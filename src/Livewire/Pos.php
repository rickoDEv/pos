<?php

namespace Rickodev\Pos\Livewire;

use Livewire\Attributes\Layout;

class Pos extends \Livewire\Component
{
    #[Layout('rickodev::layouts.app')]
    public function render()
    {
        return view('rickodev::livewire.pos');
    }
}
