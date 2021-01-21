<div class="card-body">
    <div class="form-group">
        <label>Name <span class="text-danger">*</span></label>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'']) !!}
        @error('name')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Email <span class="text-danger">*</span></label>
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'']) !!}
        @error('email')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Role <span class="text-danger">*</span></label>
        @if (Request::is('*edit'))
            {!! Form::select('roles[]', $roles,$user->roles()->pluck('id'), ['class' => 'form-control select2', 'multiple'=>'multiple']) !!}
        @else
            {!! Form::select('roles[]', $roles,null, ['class' => 'form-control select2', 'multiple'=>'multiple']) !!}
        @endif

        @error('role')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>

    @if (Request::is('*create'))
        <div class="form-group">
            <label>Password <span class="text-danger">*</span></label>
            {!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'']) !!}
            @error('password')
                <span class="form-text text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Confirm Password <span class="text-danger">*</span></label>
            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder'=>'']) !!}
            @error('password_confirmation')
                <span class="form-text text-danger">{{ $message }}</span>
            @enderror
        </div>
    @endif

    
    
</div>