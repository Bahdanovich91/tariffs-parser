<?php

namespace App\Console\Commands;

use App\Services\ParseTariffsService;
use Illuminate\Console\Command;

class ParseTariffs extends Command
{
    protected ParseTariffsService $parseTariffsService;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:parse-tariffs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function __construct(ParseTariffsService $parseTariffsService)
    {
        $this->parseTariffsService = $parseTariffsService;
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->parseTariffsService->store();
    }
}
