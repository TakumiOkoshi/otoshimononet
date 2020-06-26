@extends('layouts.admin')

@section('title', '落とし物の新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>落とし物ネット</h2>
                <br>
                <p>落とし物情報を登録しよう！</p>
                <form action="{{ action('Admin\NewsController@create')}}"
                method="post" 
                enctype="multipart/form-deta">
                
                  @if (count($errors) > 0)
                        <ul>
                           @foreach($errors->all() as $e)
                           <li>{{ $e }}</li>
                           @endforeach
                        </ul>
                  @endif
                   <div class="form-group row">
                        <label class="col-md-2" for="title">見つけた物</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                   </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">

                </form>
            </div>
        </div>
    </div>
@endsection