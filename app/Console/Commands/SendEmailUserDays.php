<?php

namespace App\Console\Commands;

use App\Mail\UserLastLogin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;

class SendEmailUserDays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send_email:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email to users who do not log in every 30 days';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = Carbon::now();
        $last_date = $date->subDays(30)->format('Y-m-d');

        $users = User::whereDate('last_login', '<=', $last_date)->get();

        collect($users)->each(fn ($user) => Mail::to($user->email)->send(new UserLastLogin()));

        $this->info('correos enviado con exito');
    }
}
