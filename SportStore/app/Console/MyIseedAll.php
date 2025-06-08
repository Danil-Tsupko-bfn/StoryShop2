<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyIseedAll extends Command
{
    protected $signature = 'iseed:all-fix {--force}';
    protected $description = 'Generate all seeders using iseed but with fixed DB name retrieval';

    public function handle()
    {
        $dbName = config('database.connections.'.config('database.default').'.database');

        $tables = collect(\DB::select("SHOW TABLES"))
            ->map(fn($t) => reset((array)$t))
            ->reject(fn($name) => $name === 'migrations');

        foreach ($tables as $table) {
            $this->call('iseed', [
                'tables' => $table,
                '--force' => $this->option('force'),
            ]);
        }
    }
}
