@extends('layouts.profile')

@section('title', '自己紹介')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>自己紹介</h2>
            <form action="{{action('Admin\ProfileController@create')}}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                名前
                <input type="text" name="my_name">
                <br>
                性別
                <input type="radio" name="gender" value="男性" >男性
                <input type="radio" name="gender" value="女性" >女性
                <br>
                趣味
                <input type="text" name="hobby">
                <p>自己紹介</p>
                <textarea name="introduction" cols="30" rows="10"></textarea>
                <br>
                <input type="submit" value="送信">

            </form>
        </div>
    </div>
</div>
@endsection