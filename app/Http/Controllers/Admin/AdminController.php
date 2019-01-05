<?php

namespace App\Http\Controllers\Admin;

use App\Model\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function adminAdd(){

        return view('admin.adminadd');
    }
    public function insert(){
        $username=$_POST['username'];
        $pwd=$_POST['pwd'];
        $tel=$_POST['tel'];
        $wheres=[
            'username'=>$username
        ];
        $where=[
            'username'=>$username,
            'pwd'=>$pwd,
            'tel'=>$tel
        ];
        $aa=UserModel::where($wheres)->first();
        if($aa){
            echo '账号已存在';
        }else{
            $res=UserModel::insertGetId($where);
            if($res){
                echo '注册成功';
                header('refresh:2,/login');
            }else{
                echo'注册失败';
            }
        }

    }
    public function login(){
        return view('admin.login');
    }
    public function loginInfo(){
        $username=$_POST['username'];
        $pwd=$_POST['pwd'];
        $where=[
            'username'=>$username,
            'pwd'=>$pwd
        ];
        $arr=UserModel::where($where)->first();
        if($arr){
            echo '登录成功';
        }else{
            echo '登录失败';
        }


    }
}