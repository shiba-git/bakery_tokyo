<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Response;

class ManagerUser
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
        // ベーシック認証で入力されたIDとPASS
        $user = $request->getUser();
        $pass = $request->getPassword();

        // IDとPASSが一致していればコントローラのアクションへ
        if($user == 'shiba' && $pass = 'password'){
            return $next($request);
        }

        // 間違っていたら401
        $headers = ['WWW-Authenticate' => 'Basic'];
        return new Response('Invalid credentials.', 401, $headers);
    }
}
