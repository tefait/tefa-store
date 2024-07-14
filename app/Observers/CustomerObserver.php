<?php

namespace App\Observers;

use App\Models\Cart;
use App\Models\Customer;

class CustomerObserver
{
    /**
     * Handle the Customer "created" event.
     */
    public function created(Customer $customer)
    {
        $carts = json_decode(request()->cookie('carts'), true);
        foreach ($carts as $cart) {
            Cart::updateOrCreate(
                ['customer_id' => $customer->id, 'product_id' => $cart['product_id']],
                [
                    'product_name' => $cart['product_name'],
                    'product_price' => $cart['product_price'],
                    'product_image' => $cart['product_image'],
                    'weight' => $cart['weight'],
                    'qty' => $cart['qty'],
                ]
            );
        }
    }

    /**
     * Handle the Customer "updated" event.
     */
    public function updated(Customer $customer): void
    {
        //
    }

    /**
     * Handle the Customer "deleted" event.
     */
    public function deleted(Customer $customer): void
    {
        //
    }

    /**
     * Handle the Customer "restored" event.
     */
    public function restored(Customer $customer): void
    {
        //
    }

    /**
     * Handle the Customer "force deleted" event.
     */
    public function forceDeleted(Customer $customer): void
    {
        //
    }
}
