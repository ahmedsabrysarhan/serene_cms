<?php

namespace App\Http\Middleware;

use App\Category;
use Closure;

class CheckCategory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Category::all()->count() <= 0 ){
            session()->flash('danger' , 'You must have at least 1 category');
            return redirect(route('categories.create'));
        }
        return $next($request);
    }
}
