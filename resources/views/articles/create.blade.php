@extends ('app')

@section('content')
    <h1>Create an Article</h1>

    {!! Form::open(['url' => 'articles']) !!}
        @include ('articles.form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

    @include ('errors.list')
@stop