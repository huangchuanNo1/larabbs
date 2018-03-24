<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Handlers\ImageUploadHandler;


class UsersController extends Controller
{
    //个人 页面
    public function show(User $user)
    {
        //var_dump($user);die;
        return view('users.show', compact('user'));
    }
    //修改页面
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    //修改
    public function update(UserRequest $request, User $user,ImageUploadHandler $uploader)
    {

        $data = $request->all();

        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', $user->id,362);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }

       // var_dump($data['avatar']);die;
        $user->update($data);
        //var_dump($user->update($data));
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }
}
