<?php

namespace App\Console;
use \App\Subscription;
use \App\Reminder;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Mail;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
      $schedule->call(function () {
          if (rand(1,90)==1){
                $subscriptions = Subscription :: whereNull('unsubscribed_at')->whereNull('deleted_at')->get();
                $reminder = Reminder::inRandomOrder()->first();
                foreach ($subscriptions as $subscription){
                      Mail::to($subscription->email)
                        ->send(new \App\Mail\Reminder($subscription->email, $subscription->unsubscribe_key,
                        $reminder->id, $reminder->body));
                }
          }
      })->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
