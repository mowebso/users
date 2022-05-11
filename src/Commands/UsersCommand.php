<?php

namespace MoWebSo\Users\Commands;

use Illuminate\Console\Command;

class UsersCommand extends Command
{
    public $signature = 'users';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
