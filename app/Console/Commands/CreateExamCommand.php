<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateExamCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:exam {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new exam';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');

        $examController = new \App\Http\Controllers\ExamController;
        $examController->createExam($name);

        $this->info('Exam created successfully.');
    }
}
