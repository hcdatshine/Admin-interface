<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleware
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
        if($request->has('diem')&& $request['diem']>=5)//ktra có điểm truyền lên hay không
            return $next($request);//mặc định là đi tiếp
        else
            return redirect()->route('loi');
        //gọi route lỗi phải đặt tên.
    }
}
