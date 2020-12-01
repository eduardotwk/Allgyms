<?php


namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BaseWebController extends Controller
{
    protected function myUser()
    {
        return auth()->user();
    }
    protected function currentTenant()
    {
        $user = auth()->user() ?? User::query()->find(1);
        $userPreferences = DB::table('user_preferences')->where('user_id', $user->id)->first();
        $tenant = Tenant::query()->find($userPreferences->current_tenant);

        return $tenant;
    }



}

