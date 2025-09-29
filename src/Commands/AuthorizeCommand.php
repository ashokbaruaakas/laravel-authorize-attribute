<?php

namespace Ashok\Authorize\Commands;

use Illuminate\Console\Command;

class AuthorizeCommand extends Command
{
    public $signature = 'laravel-authorize-attribute';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
