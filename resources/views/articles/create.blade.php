@extends ('app')

@section('content')

    <br/>

    <h1>Create an Article</h1>

    @include ('errors.list')

    {!! Form::open(['url' => 'articles']) !!}
        @include ('articles.form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}
@stop

<style>
    h1 {
        text-align: center;
    }
</style>