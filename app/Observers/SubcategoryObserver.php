<?php

namespace App\Observers;

use App\Models\Subcategory;

class SubcategoryObserver
{
    /**
     * Handle the Subcategory "created" event.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return void
     */
    public function created(Subcategory $subcategory)
    {
        //
    }

    /**
     * Handle the Subcategory "updated" event.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return void
     */
    public function updated(Subcategory $subcategory)
    {
        //
    }

    /**
     * Handle the Subcategory "deleted" event.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return void
     */
    public function deleted(Subcategory $subcategory)
    {
        //
    }

    /**
     * Handle the Subcategory "restored" event.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return void
     */
    public function restored(Subcategory $subcategory)
    {
        //
    }

    /**
     * Handle the Subcategory "force deleted" event.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return void
     */
    public function forceDeleted(Subcategory $subcategory)
    {
        //
    }
}
