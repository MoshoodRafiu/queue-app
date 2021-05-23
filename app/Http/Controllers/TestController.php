<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testJob() :string
    {
        foreach (User::all() as $user){
            TestJob::dispatch($user);
        }
        return "Done";
    }
}
