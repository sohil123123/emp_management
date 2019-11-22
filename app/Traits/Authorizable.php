<?php
namespace App\Traits;

use Auth;

trait Authorizable
{
    private $abilities = [
        'index' => 'view',
        'edit' => 'edit',
        'show' => 'view',
        'update' => 'edit',
        'create' => 'add',
        'store' => 'add',
        'destroy' => 'delete'
    ];

    /**
     * Override of callAction to perform the authorization before
     *
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public function callAction($method, $parameters)
    {
    	// echo '<pre>';
    	// print_r($method);
    	// exit;
        if( $ability = $this->getAbility($method) ) {
            // echo $ability;exit;
            // print_r($this);exit;
            //echo '<pre>';print_r($this->User->getAllPermissions());exit;
            $this->authorize($ability);
            //echo 'jiii';exit;
        }
        
        return parent::callAction($method, $parameters);
    }

    public function getAbility($method)
    {
    	// echo 'hi';exit;
        $routeName = explode('.', \Request::route()->getName());
        $action = array_get($this->getAbilities(), $method);
        // echo $action;
        // echo $action ? $action . '_' . $routeName[1] : null;exit;
        // print_r($routeName);
        // exit;
        if(Auth::guard('admin')->check()){
            return $action ? $action . '_' . $routeName[1] : null;
        }elseif(Auth::guard('web')->check()){
            return $action ? $action . '_' . $routeName[0] : null;
        }
        
    }

    private function getAbilities()
    {
        return $this->abilities;
    }

    public function setAbilities($abilities)
    {
        $this->abilities = $abilities;
    }
}

