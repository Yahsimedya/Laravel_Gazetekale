<?php

namespace App\Console\Commands;

use App\Models\Post;
use Artisan;
use DB;
use Illuminate\Console\Command;

class Posttask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:posttask';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $now = date("Y-m-d H:i:s");
        // echo $data=DB::table('posts')->where('status',0)->whereRaw("publish_date<$now")->get();
        // dd($now);
        $data = Post::where('status', 0)->orWhere('status', NULL)->whereDate('publish_date', '<=', $now)->get();
        // dd($data);
        $data->each(function ($item) {
            echo $item->id;
            DB::table('posts')->where('id', $item->id)->update(['status' => 1]);
        });
        if ($data) {
            Artisan::call('cache:clear');
        }
        //        echo "0";
        //        return 0;
    }
}
