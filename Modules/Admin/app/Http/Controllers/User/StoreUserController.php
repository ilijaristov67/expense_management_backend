<?php

namespace Modules\Admin\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Modules\Admin\Actions\StoreUser;

class StoreUserController extends Controller
{
    public function __invoke()
    {
        return StoreUser::run();
    }
}
