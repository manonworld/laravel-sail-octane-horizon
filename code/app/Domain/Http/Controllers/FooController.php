<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Domain\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use App\Jobs\SendOrderEmail;

/**
 * Description of FooController
 *
 * @author mosta <info@manonworld.de>
 */
class FooController extends Controller {

    public function all() {
        
        for ($i = 0; $i < 20; $i++) {
            $order = Order::findOrFail(rand(1, 50));
            SendOrderEmail::dispatch($order)->onQueue('email');
        }

        return 'Dispatched orders';
    }

}
