<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Jobs\TestJob;

class TestController extends Controller
{
    
    public function queueJob() {
        $job = (new TestJob())->delay(Carbon::now()->addSeconds(5));
        dispatch($job);
        return view('test');
    }
}
