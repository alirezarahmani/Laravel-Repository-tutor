<?php
namespace App\Alireza\Application\API\Admin\Controllers;
use Assert\Assertion;
use Assert\AssertionFailedException;
use App\Alireza\Infrastructure\Repositories\Post\PostRepo as repo;
use Session,Input,View,Redirect,App,Flash;
use App\Http\Controllers\Controller as BaseController;
class PostController extends BaseController
{
    public  $post;
    public  $repo;

    public function __construct(repo $repo)
    {
        $this->repo=$repo;
    }

    public function edit()
    {
        $all=Input::all();
        $all['id']=Input::get('id');//prevent not exist error
        return view('admin.edit')->with(['ListData'=>$this->repo->PostOfId($all['id'])]);
    }

    public function edit_Post()
    {
        Session::put('_token', sha1(microtime()));
        $all=Input::all();
        $v=PostValidator::validate($all);
        if(!$v->passes())
            return  redirect()->back()->withInput()->withErrors($v);
        try
        {
            $Id = $this->repo->PostOfId($all['id']);
            Assertion::notNull($Id);
            $this->repo->update($Id, $all);
            Flash::message('edit success');
            return redirect()->back();
        }
        catch(AssertionFailedException $e)
        {
            $this->repo->create($this->repo->perpare_data($all));
            Flash::message('add success');
            return redirect()->back();
        }
    }
}
