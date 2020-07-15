@extends('layouts.admin')
@section('title', '自己紹介の編集')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>自己紹介</h2>
            <form action="{{action('Admin\ProfileController@update')}}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                名前
                <input type="text" name="name" value="{{$profile_form->name}}">
                <br>
                性別
                <input type="radio" name="gender" value="男性" >男性
                <input type="radio" name="gender" value="女性" >女性
                {{$profile_form->gender}}
                <br>
                <input type="text" name="hobby" value="{{$profile_form->hobby}}">
                <p>自己紹介</p>
                <textarea name="introduction" cols="30" rows="10">{{$profile_form->introduction}}</textarea>
                <br>
                <input type="hidden" name="id" value="{{$profile_form->id}}">
                {{ csrf_field()}}
                <input type="submit" value="更新">
            </form>
            <div class="row mt-5">
            <div class="col-md-4 mx-auto">
                <h2>編集履歴</h2>
                <ul class="list-group">
                    @if ($profile_form->histories != NULL)
                        @foreach ($profile_form->histories as $history)
                            <li class="list-group-item">{{ $history->edited_at }}</li>
                        @endforeach
                    @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
