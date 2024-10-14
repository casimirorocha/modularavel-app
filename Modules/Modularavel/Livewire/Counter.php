<?php

namespace Modules\Modularavel\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Counter extends Component
{
	public int $count;

	/*
	|----------------------------------
	| Set initial values for properties
	|----------------------------------
	|
	| @return void
	|
	*/
	public function mount(): void
	{
		$this->count = 1;
	}

	public function increment(): void
	{
		$this->count++;
	}

	public function decrement(): void
	{
		$this->count--;
	}

	public function render(): View|string
	{
		return view('modularavel::livewire.counter');
	}
}
