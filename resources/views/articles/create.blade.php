@extends ('app')

@section('content')

    <br/>

    <h1>Create an Article</h1>

    {!! Form::open(['url' => 'articles']) !!}
        @include ('articles.form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

    @include ('errors.list')
@stop

<style>
    h1 {
        text-align: center;
    }
</style>