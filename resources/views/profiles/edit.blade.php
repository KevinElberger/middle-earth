<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                    </button>
                    <h4 class="modal-title" id="myModalLabel">Edit Your Profile</h4>
                </div>
                <!-- Form submission sent to profile/index/{id} for creation -->
                @if(!empty($prof))
                    <!-- Check if page is actually authenticated user's profile, if not, load the auth profile instead. -->
                    @if($prof->user_id == $auth)
                        <div class="modal-body">
                            {!! Form::model($prof, ['method' => 'POST', 'action' => ['ProfilesController@update']]) !!}
                            {!! Form::label('location', 'Location:') !!}
                            {!! Form::text('location', null, ['class' => 'form-control']) !!}
                            {!! Form::label('profile', 'Bio:') !!}
                            {!! Form::textarea('profile', null, ['class' => 'form-control', 'placeholder' => 'Write here...']) !!}
                        </div>
                        <div class="modal-footer">
                            {!! Form::button('Close', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
                            {!! Form::submit('Save Changes', ['id' => 'littleButton', 'class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    @else
                        <div class="modal-body">
                            {!! Form::model($authProf, ['method' => 'POST', 'action' => ['ProfilesController@update']]) !!}
                            {!! Form::label('location', 'Location:') !!}
                            {!! Form::text('location', null, ['class' => 'form-control']) !!}
                            {!! Form::label('profile', 'Bio:') !!}
                            {!! Form::textarea('profile', null, ['class' => 'form-control', 'placeholder' => 'Write here...']) !!}
                        </div>
                        <div class="modal-footer">
                            {!! Form::button('Close', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
                            {!! Form::submit('Save Changes', ['id' => 'littleButton', 'class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    @endif
                @elseif(!empty(\Auth::user()->profiles()->get()->last()))
                    <div class="modal-body">
                        {!! Form::model(\Auth::user()->profiles()->get()->last(), ['method' => 'POST', 'action' => ['ProfilesController@update']]) !!}
                        {!! Form::label('location', 'Location:') !!}
                        {!! Form::text('location', null, ['class' => 'form-control']) !!}
                        {!! Form::label('profile', 'Bio:') !!}
                        {!! Form::textarea('profile', null, ['class' => 'form-control', 'placeholder' => 'Write here...']) !!}
                    </div>
                    <div class="modal-footer">
                        {!! Form::button('Close', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
                        {!! Form::submit('Save Changes', ['id' => 'littleButton', 'class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                @else
                    <div class="modal-body">
                        {!! Form::open(['url' => $profileURL]) !!}
                        {!! Form::label('location', 'Location:') !!}
                        {!! Form::text('location', null, ['class' => 'form-control']) !!}
                        {!! Form::label('profile', 'Bio:') !!}
                        {!! Form::textarea('profile', null, ['class' => 'form-control', 'placeholder' => 'Write here...']) !!}
                    </div>
                    <div class="modal-footer">
                        {!! Form::button('Close', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
                        {!! Form::submit('Save Changes', ['id' => 'littleButton', 'class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>