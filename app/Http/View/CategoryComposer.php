<?php

namespace App\Http\View;

use App\Models\Category;
use Illuminate\View\View;

class CategoryComposer
{
    public function compose(View $view)
    {
        // Ensure to load children categories efficiently
        $categories = Category::get();
        $view->with('categories', $categories);
    }
}
