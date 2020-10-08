@extends('layouts.profile')
@section('title', 'プロフィールの詳細')

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        
        <!-- 投稿情報 -->
        <div class="summary">
            <p>名前 : <span>{{ $post->name }}</span></p>
        </div>
        
        <!-- 投稿情報 -->
        <div class="summary">
            <p>性別 : <span>{{ $post->gender }}</span></p>
        </div>
        
        <!-- 投稿情報 -->
        <div class="summary">
            <p>趣味 : <span>{{ $post->hobby }}</span></p>
        </div>
 
        <!-- 投稿情報 -->
        <div class="summary">
            <p>自己紹介 : {{ $post->introduction }}</p>
        </div>
         
        
    </div>
    <div class="col-md-4">
                <a href="{{ action('Admin\ProfileController@index') }}" role="button" class="btn btn-primary">一覧に戻る</a>
            </div>
</div>
@endsection