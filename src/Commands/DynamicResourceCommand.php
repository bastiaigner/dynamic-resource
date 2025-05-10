<?php

namespace Bastiaigner\DynamicResource\Commands;

use Illuminate\Console\Command;

class DynamicResourceCommand extends Command
{
    public $signature = 'dynamic-resource';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
