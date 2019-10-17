@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- 日付の取得・表示 --}}
        {{ \Carbon\Carbon::now()->formatLocalized('%Y年%m月%d日(%a)') }} 
        {{ $user->name }}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">勤怠</div>
                <div class="button-form">
                    <ul class="list-unstyled">
                        <li>
                            <form action="#!" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-primary btn-lg btn-block">出勤</button>
                            </form>
                        </li>
                        <li>
                            <form action="#!" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-success btn-lg btn-block">退勤</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
</div>
@endsection
