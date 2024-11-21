<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;
    public $name = '';

    public function mount() // 描画の初期状態で実行
    {
        $this->name = 'mount';
    }

    public function updated() // 更新後に実行
    {
        $this->name = 'updated';
    }

    public function mouseOver() // ホバー時に実行(関数名は任意)
    {
        $this->name = 'mouseover';
    }

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
