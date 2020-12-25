<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->is_logged){
            return redirect()->route('login')->with('msg', [
                'type' => 'warning',
                'body' => 'Para acceder debe logear su cuenta'
            ] );
        }

        $model = model('UserModel');
        if(!$user = $model->getUserBy('id', session()->id_user)){
            session()->destroy();
            return redirect()->route('login')->with('msg', [
                'type' => 'warning',
                'body' => 'Usuario actualmente no esta disponible'
            ]);
        }

        if(!in_array($user->getRole()->name_group, $arguments)){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            //throw PageNotFoundException::forPageNotFound();
        }
    } 
  


    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}