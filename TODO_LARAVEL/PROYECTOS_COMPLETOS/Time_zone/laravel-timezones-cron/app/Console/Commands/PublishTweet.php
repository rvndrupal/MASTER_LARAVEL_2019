<?php

namespace App\Console\Commands;

use App\Tweet;
use Carbon\Carbon;
use Illuminate\Console\Command;

class PublishTweet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'social:publish_tweets';
    //se crea el comando social:publish_tweets en consola

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publicación de tweets automáticos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', now(), config('app.timezone'));
        //fecha si la fecha actual es mayor que la fecha tiene que publicar utiliza la zona horaria de nuestra aplicacion
        $tweet = Tweet::where('published_at', '<=', $date->format('Y-m-d H:i:s'))->where('published', false)->first();
        //la publicacion se a menor a la fecha actual
	    if ($tweet) {
		    $tweet->published = true;
		    //TODO ¡publicar en twitter!
		    $tweet->save(); //actualiza el twwet a save lo pasa a true
	    }
    }
}
