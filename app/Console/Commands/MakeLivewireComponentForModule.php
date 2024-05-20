<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Mhmiton\LaravelModulesLivewire\Commands\LivewireMakeCommand;

class MakeLivewireComponentForModule extends LivewireMakeCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'modularavel:make-livewire {component} {module} {--view=} {--force} {--inline} {--stub=} {--custom}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    protected function getClassContents(): array|string|null
    {
        $template = file_get_contents($this->component->stub->class);

        if ($this->isInline()) {
            $template = preg_replace('/\[quote\]/', $this->getComponentQuote(), $template);
        }

        return preg_replace(
            ['/\[namespace\]/', '/\[class\]/', '/\[view\]/', '/\[module_name\]/', '/\[module_lowername\]/', '/\[tag\]/'],
            [$this->getClassNamespace(), $this->getClassName(), $this->getViewName(), $this->getModuleName(), $this->getModuleLowerName(), $this->getComponentTagForView()],
            $template,
        );
    }

    protected function getViewContents(): array|string|null
    {
        return preg_replace(
            ['/\[quote\]/', '/\[class\]/', '/\[view\]/', '/\[module_name\]/', '/\[module_lowername\]/'],
            [$this->getComponentQuote(), $this->getClassSourcePath(),$this->getViewSourcePath(), $this->getModuleName(), $this->getModuleLowerName()],
            file_get_contents($this->component->stub->view),
        );
    }

    protected function getComponentQuote(): string
    {
        return "The <code>{$this->getClassName()}</code> livewire component is loaded from the ".($this->isCustomModule() ? 'custom ' : '')."<code>{$this->getModuleName()}</code> module.";
    }

    protected function getComponentTagForView(): string
    {
        $directoryAsView = $this->directories
            ->map([Str::class, 'kebab'])
            ->implode('.');

        $tag = "livewire:{$this->getModuleLowerName()}::{$directoryAsView}";

        return Str::replaceLast('.index', '', $tag);
    }
}
