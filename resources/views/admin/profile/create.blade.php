
@extends('layouts.profile')

@section('title', 'プロフィールの作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール</h2>
              <form action="{{ action('Admin\ProfileController@create')}}"
                 method="post"
                 enctype="multipart/form-deta">
                    
                  @if(count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                  @endif
                  
                  <div class="form-group row">
                      <label class="col-md-5">氏名</label>
                      <div class="col-md-10">
                           <input type="text" class="form-control" placeholder="name">
                      </div>
                  </div>
                      
                  <div class="form-group row">
                      <label class="col-md-5">性別</label>
                      <div class="col-md-10">
                           <input type="text" class="form-control" placeholder="gender">
                      </div>
                  </div>
                  
                  <div class="form-group row">
                      <label class="col-md-5">趣味</label>
                      <div class="col-md-10">
                          <input tyoe="text" class="form-control" placeholder="hobby">
                      </div>
                  </div>
                  
                  <div class="form-group row">
                        <label class="col-md-5">自己紹介</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20" placeholder="introduction"></textarea>
                        </div>
                  </div>
                    
              </form>
            </div>
        </div>
    </div>
@endsection