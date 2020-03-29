<?php

namespace App\Http\Middleware;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

use Closure;

class Author
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
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        session_start();
        $user = $_SESSION['user'];
        $ref = $database->getReference("pengguna/{$user}/pekerjaan");
        if($ref->getValue() == "admin"){
            return redirect('admin');
        }else{
            return redirect('Dashboard');
        }
        return $next($request);
    }
}
