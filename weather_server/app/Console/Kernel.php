<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Models\Subscription;
use App\Mail\WeatherForecastMail;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $subscriptions = Subscription::all();
            $forecast = $this->getWeatherForecast();

            foreach ($subscriptions as $subscription) {
                Mail::to($subscription->email)->send(new WeatherForecastMail($forecast));
            }
        })->dailyAt('07:00');
    }

    private function getWeatherForecast()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://api.weatherapi.com/v1/forecast.json', [
            'query' => [
                'key' => env('WEATHER_API_KEY'),
                'q' => 'TP Ho Chi Minh',
                'days' => 1,
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        $forecastString = "Date: {$data['forecast']['forecastday'][0]['date']}\nTemperature: {$data['forecast']['forecastday'][0]['day']['avgtemp_c']}°C\nWind: {$data['forecast']['forecastday'][0]['day']['maxwind_kph']} kph\nHumidity: {$data['forecast']['forecastday'][0]['day']['avghumidity']}%\nCondition: {$data['forecast']['forecastday'][0]['day']['condition']['text']}";
        return $forecastString;
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
