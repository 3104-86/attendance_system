@extends('layouts.layout')

@section('content')
    <div class="container">
            <div class="loginPage">
                    <div class="container">
                        <div class="loginPage_contents">
                            <h1 class="h3 loginPage_contents_title">勤怠管理アプリ</h1>
                            <div class="btn loginPage_contents_btn"><a href="{{ route('register') }}">新規登録</a></div> 
                            <div class="btn loginPage_contents_btn"><a href="{{ route('login') }}">メールアドレスでログインする</a></div> 
                        </div>
                    </div>
                </div>      
    </div>
    
    
    
@endsection