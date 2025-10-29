<?php

namespace App\Observers;

use App\Models\Cover;

class CoverObserver
{
    public function creating(Cover $cover)
    {
        $cover->order = Cover::max('order') + 1;
    }

    public function updating(Cover $cover)
    {
        // Logic to execute before a Cover is updated
    }

    public function deleting(Cover $cover)
    {
        // Logic to execute before a Cover is deleted
    }
}
