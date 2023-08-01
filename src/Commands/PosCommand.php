<?php

namespace Rickodev\Pos\Commands;

use Illuminate\Console\Command;

class PosCommand extends Command
{
    public $signature = 'pos';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
