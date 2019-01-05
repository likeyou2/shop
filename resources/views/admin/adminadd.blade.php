{{-- 用户注册--}}

@extends('layouts.bst')

@section('content')
    <form class="form-signin" action="/adminInfo" method="post">
        {{csrf_field()}}
        <h2 class="form-signin-heading">用户注册</h2>
        <table>
            <tr><td>用户名</td><td><input type="text" name="username" id="inputNickName" class="form-control" placeholder="nickname" required autofocus></td></tr>
            <tr><td>密码</td><td> <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="***" required></td></tr>
            <tr><td>电话</td><td> <input type="tel" name="tel" id="inputTel" class="form-control" placeholder="手机号" required autofocus></td></tr>
            <tr><td><input type="submit" class="btn btn-lg btn-primary btn-block" value="注册"></td></tr>
        </table>
        <!--
        <label for="inputNickName">Nickname</label>
        <input type="text" name="nick_name" id="inputNickName" class="form-control" placeholder="nickname" required autofocus>
        <label for="inputEmail">Email</label>
        <input type="email" name="u_email" id="inputEmail" class="form-control" placeholder="@" required autofocus>
        <label for="inputPassword" >Password</label>
        <input type="password" name="u_pass" id="inputPassword" class="form-control" placeholder="***" required>
        <label for="inputPassword2" >Password</label>
        <input type="password" name="u_pass2" id="inputPassword2" class="form-control" placeholder="***" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
        -->
    </form>
@endsection