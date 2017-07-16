@extends('peterzhang')
@section('content')
    <h1>撰写文章</h1>
    <h1>{{ $old->title }}</h1>
        {!! Form::model($old,['method'=>'PATCH','url'=>'articles/'.$old->id]) !!}
        <div class="form-group">
        {!! Form::label('标题') !!}
        {!! Form::text('title',null,[ 'class'=>'form-control' ]) !!}
        </div>
        <div class="form-group">
        {!! Form::label('作者') !!}
        {!! Form::text('author',null,[ 'class'=>'form-control' ]) !!}
        </div>
        <div class="form-group">
        {!! Form::label('内容') !!}
        {!! Form::textarea('content',null,[ 'class'=>'form-control' ]) !!}
        </div>
        {!! Form::submit('发表文章',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}

        <!-- 打印错误 -->
        @if($errors->any())
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
            @endforeach
        </ul>
        @endif
@stop
