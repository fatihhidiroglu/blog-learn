<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class kotuKelime
{
    public function handle(Request $request, Closure $next)
    {
        //tüm işlemler burada
        $badwords=['elma','armut','çilek'];
        if (in_array($request->kullanici_adi, $badwords)) {
            $bad=mb_strlen($request->kullanici_adi);
            $sansur= '';
            for($i = 0; $i < $bad; $i++) {
              $sansur= $sansur. '*';
            }
            $request->merge([
              'kullanici_adi'=>$sansur
            ]);
        }

        return $next($request);
    }
}
