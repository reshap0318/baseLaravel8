<div class="card-body">
    <div class="form-group">
        <label>Role Name <span class="text-danger">*</span></label>
        <input type="text" name="name" value="{{ $role->name }}" placeholder="Role Name" class="form-control">
        @error('name')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div align="center">
        <h3 class="display-5">Permission</h3>
    </div>

    <div class="row">
        @foreach($actions as $key => $action)
        <div class="form-group col-4">
            <?php
                $first= array_values($action)[0];
                $firstname =explode(".", $first)[0];
            ?>
            <label>{{ $firstname }}</label>
            <select class="form-control select2" name="permissions[]" multiple="multiple">
                @foreach($action as $act)
                    @if(explode(".", $act)[0]=="api")
                        <option value="{{$act}}" {{array_key_exists($act, $role->permissions)?"selected":""}}>
                            {{isset(explode(".", $act)[2])?explode(".", $act)[1].".".explode(".", $act)[2]:explode(".", $act)[1]}}
                        </option>
                    @else
                        <option value="{{$act}}" {{array_key_exists($act, $role->permissions)?"selected":""}}>
                            {{explode(".", $act)[1]}}
                        </option>
                    @endif
                @endforeach
            </select>
        </div>
    @endforeach 
    </div>
    
</div>