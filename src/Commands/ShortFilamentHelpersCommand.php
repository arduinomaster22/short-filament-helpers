<?php

namespace ManojHortulanus\ShortFilamentHelpers\Commands;

use Illuminate\Console\Command;

class ShortFilamentHelpersCommand extends Command
{
    public $signature = 'short-filament-helpers';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
