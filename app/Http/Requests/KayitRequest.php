<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KayitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function attributes() {
      return [
        'ad'=>'Ad Soyad',
        'kullanici_adi'=>'Kullanıcı Adı',
        'sifre'=>'Şifre'
      ];
    }

    public function messages() {
      return [
        'ad.required'=>'Bu alanı boş bırakamazsınız',
        'ad.min'=> 'Ad alanında minimum 3 karakter gereklidir'
      ];
    }

    public function rules()
    {
        return [
          'ad'=>'required | min:3',
          'email'=>'required | email',
          'sifre'=>'required | min:3 | confirmed',
          'kullanici_adi'=>'required'
        ];
    }
}
