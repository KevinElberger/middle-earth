<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Publish On:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::hidden('user_name', $user->name) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['id' => 'littleButton', 'class' => 'btn btn-primary form-control']) !!}
</div>

