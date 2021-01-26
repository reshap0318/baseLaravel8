<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'layouts.metronic-vue.myApp';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        return array_merge(parent::share($request), [
            'flash' => [
                'message' => fn () => $request->session()->get('message')
            ],

            'app' => [
                'name' => config('app.name'),
                'url' => config('app.url')
            ],

            'user' => fn () => $request->user()
                ? $request->user()
                : null,

            'permissions' => $this->permissions($request),
        ]);
    }

    public function permissions(Request $request)
    {
        $permissions = [];
        foreach($request->user()->roles as $role){
            foreach($role->permissions as $key => $value){
                $newPermission = [str_replace('-','_',str_replace(".","_",$key))=>$value];
                $permissions = array_merge($permissions,$newPermission);
            }
        }
        return $permissions;
    }
}
