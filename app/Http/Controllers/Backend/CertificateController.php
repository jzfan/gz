<?php

namespace App\Http\Controllers\Backend;

use Gz\User\User;
use Gz\User\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificateController extends Controller
{

    public function index()
    {
        $this->validate(request(), [
        		'user_id' => 'required|exists:users,id'
        	]);
        $user_id = request('user_id');
        $certificates = User::findOrFail($user_id)->certificates;
        return view('backend.user.certificates', compact('certificates', 'user_id'));
    }

    public function destroy($id)
    {
        Certificate::destroy($id);
        return redirect()->back()->with('success', '删除成功！');
    }

    public function store()
    {
        $this->validate(request(), [
        		'user_id' => 'required|exists:users,id',
        		'picture' => 'required|image',
        		'name' => 'required|string|max:255'
        	]);
        $path = '/' . str_replace('public', 'storage', request('picture')->store('public/certificate'));
        Certificate::create(array_merge(
        		request(['user_id', 'name']),
        		['picture' => $path]
        	));
        return redirect('/backend/certificates?user_id='. request('user_id'))->with('success', '添加成功！');
    }

    public function update($id)
    {
        $this->validate(request(), [
        		'name' => 'required|string|max:255'
        	]);
        Certificate::findOrFail($id)->update(['name' => request('name')]);
        return redirect()->back()->with('success', '更新成功！');
    }
}
