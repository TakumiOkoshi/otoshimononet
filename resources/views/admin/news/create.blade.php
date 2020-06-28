@extends('layouts.common')

@section('title', '落とし物の新規登録')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2>落とし物情報を登録しよう！</h2>
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
                        <label class="col-md-2" for="title">日付</label>
                            <div class="col-md-5">
                                <input type="date" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                   </div>


                   <div class="form-group row">
                        <label class="col-md-2" for="title">落とし物</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>     
                   </div>

                   <div class="dropdown form-group row">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            種類
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">財布</a></li>
                            <li><a href="#">電子機器</a></li>
                            <li><a href="#">携帯</a></li>
                            <li><a href="#">その他</a></li>
                        </ul>
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