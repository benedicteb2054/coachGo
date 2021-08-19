<?php

use App\Investments;
use App\Markets;
use Illuminate\Support\Optional;

if ( ! function_exists('image_storage_dir') )
{
    function image_storage_dir()
    {
        return config('image.dir');
    }
}

if ( ! function_exists('image_cache_path') )
{
    function image_cache_path($path = Null)
    {
        $path = config('image.cache_dir') . '/' . $path;
        return Str::finish($path, '/');
    }
}
function get_sender_email()
{
    return config('app.mail.from_address');
}

function get_sender_name()
{
    return config('app.mail.from_name');
}
function get_platform_title(){
    return 'FREEMANNA';
}

function payment_service(){
    // return  "helle";
    return Investments::where('market_id',Markets::latest()->first());
}




if ( ! function_exists('get_storage_file_url') )
{
    function get_storage_file_url($path = null, $size = 'small')
    {
        // dd(Storage::url("/{$path}"));
        if ( !$path )
            return get_placeholder_img($size);

        // return asset("image/{$path}?p={$size}");
        return url("storage/{$path}?p={$size}");
    }
}


if ( ! function_exists('get_placeholder_img') )
{
    function get_placeholder_img($size = 'small')
    {
        $size = config("image.sizes.{$size}");

        if ($size && is_array($size))
            return "https://placehold.it/{$size['w']}x{$size['h']}/eee?text=" . trans('aucune image disponible');

        return url("images/placeholders/no_img.png");
    }

    if (! function_exists('optional')) {
        /**
         * Provide access to optional objects.
         *
         * @param  mixed  $value
         * @param  callable|null  $callback
         * @return mixed
         */
        function optional($value = null, callable $callback = null)
        {
            if (is_null($callback)) {
                return new Optional($value);
            } elseif (! is_null($value)) {
                return $callback($value);
            }
        }
    }

}
