<?php

namespace App\Console\Commands;

use App\Exceptions\File\IsNotAFileException;
use App\Exceptions\File\IsNotWriteableException;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Mhmiton\LaravelModulesLivewire\Commands\LivewireMakeCommand;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Throwable;

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
     * @throws Throwable
     */
    public function handle(): void
    {
        parent::handle();

        $autoAddRoute = $this->askWithCompletion('add route to routes/livewire.php?', [
            'y',
            'n',
        ], 'y,n');

        $runComposerDump = $this->askWithCompletion('run composer dump-autoload?', [
            'y',
            'n',
        ], 'y,n');

        $runOptimizeClear = $this->askWithCompletion('run php artisan optimize:clear?', [
             'y',
             'n',
         ], 'y,n');

        if (in_array($runComposerDump, ['y', 'Y', 'yes', 'Yes'])) {
            $this->dump_autoload();
        }

        if (in_array($autoAddRoute, ['y', 'Y', 'yes', 'Yes'])) {
            $this->automaticAddRouteAtRouteFile('livewire');
        }

        if (in_array($runOptimizeClear, ['y', 'Y', 'yes', 'Yes'])) {
            $this->call('optimize:clear');
        }
    }

    /**
     * @throws Throwable
     */
    protected function automaticAddRouteAtRouteFile(string $routeGroupPrefix = null): void
    {
        $component = str_replace('/', '\\', $this->getClassSourcePath());

        $component = str_replace('.php', '::class', $component);

        $className = strtolower($this->getClassName());

        $moduleLowerName = $this->getModuleLowerName();

        $newRouteData = "\Livewire\Volt\Volt::route('$className', \\$component)
                    ->name('$moduleLowerName::$routeGroupPrefix.$className')
                    ->prefix('$moduleLowerName');";

        $livewireRoutesFile = $this->getModulePath().'/routes/livewire.php';

        $this->ensureFileExists($livewireRoutesFile);

        $this->ensureIsFile($livewireRoutesFile);

        $this->ensureIsWriteableFile($livewireRoutesFile);
        
        File::chmod($livewireRoutesFile, '0644');

        File::append($livewireRoutesFile, PHP_EOL.$newRouteData.PHP_EOL);

        $this->warn("New route added in: $livewireRoutesFile");
    }

    /**
     * @throws Throwable
     */
    protected function ensureFileExists(string $path = null): void
    {
        throw_unless(File::exists($path), FileNotFoundException::class);
    }

    /**
     * @throws Throwable
     */
    protected function ensureIsFile(string $path = null): void
    {
        throw_unless(File::isFile($path), IsNotAFileException::class);
    }

    /**
     * @throws Throwable
     */
    protected function ensureIsWriteableFile(string $path = null): void
    {
        throw_unless(File::isWritable($path), IsNotWriteableException::class);
    }

    private function dump_autoload(): void
    {
        $this->warn('running composer dump-autoload....');
        
        $process = new Process(['composer', 'dump-autoload', '-o']);
        $process->setTimeout(null);

        try {
            $process->mustRun();
            $this->info($process->getOutput());
        } catch (ProcessFailedException $e) {
            $this->error($e->getMessage());
        }
    }

    /**
     * Execute the console command.
     */
    protected function getClassContents(): array|string|null
    {
        $template = file_get_contents($this->component->stub->class);

        if ($this->isInline()) {
            $template = preg_replace('/\[quote]/', $this->getComponentQuote(), $template);
        }

        return preg_replace(
            pattern: ['/\[namespace]/', '/\[class]/', '/\[view]/', '/\[module_name]/', '/\[module_lowername]/', '/\[tag]/'],
            replacement: [$this->getClassNamespace(), $this->getClassName(), $this->getViewName(), $this->getModuleName(), $this->getModuleLowerName(), $this->getComponentTagForView()],
            subject: $template,
        );
    }

    protected function getViewContents(): array|string|null
    {
        return preg_replace(
            pattern: ['/\[quote]/', '/\[class]/', '/\[view]/', '/\[module_name]/', '/\[module_lowername]/', '/\[view_name]/'],
            replacement: [$this->getComponentQuote(), $this->getClassSourcePath(),$this->getViewSourcePath(), $this->getModuleName(), $this->getModuleLowerName(), ucfirst($this->component->view->name)],
            subject: file_get_contents($this->component->stub->view),
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
