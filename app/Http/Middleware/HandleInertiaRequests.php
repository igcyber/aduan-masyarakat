<?php

namespace App\Http\Middleware;

use App\Http\Resources\UserSharedResource;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        // Memanggil metode share dari kelas middleware induk (parent)
        return array_merge(parent::share($request), [
            //akses informasi pengguna yang terautentikasi
            // Menambahkan data ke array respons Inertia yang diberikan kepada sisi frontend
            'auth.user' => fn () => $request->user() ? new UserSharedResource($request->user()) : null,

            // Menambahkan informasi terkait dengan Ziggy, yang digunakan untuk menyediakan data yang diperlukan untuk navigasi di sisi klien
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
        ]);
    }
}
