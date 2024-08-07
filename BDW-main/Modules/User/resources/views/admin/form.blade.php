@foreach($model->columnsForMigrations() as $column_name => $value)
@if($value['is_dynamic'] == true)
    @php
        $name = ucwords(str_replace("_", " ", $column_name));
    @endphp
    @if($value['view_form_type'] == 'text')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ $name }}</label>
            <?php
                print_r($data->$column_name);
            ?>
            <input type="text" name="{{ $column_name }}" value="{{ $data->$column_name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
    @elseif($value['view_form_type'] == 'date')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ $name }}</label>
            <input type="date" name="{{ $column_name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
    @elseif($value['view_form_type'] == 'email')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ $name }}</label>
            <input type="email" name="{{ $column_name }}" value="{{ $data->email }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div> 
    @elseif($value['view_form_type'] == 'password')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ $name }}</label>
            <input type="password" name="{{ $column_name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
    @elseif($value['view_form_type'] == 'date')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ $name }}</label>
            <input type="date" name="{{ $column_name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
    @elseif($value['view_form_type'] == 'select')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ $name }}</label>
            <select name="{{ $column_name }}" class="form-control">
                @foreach($value['view_form_values'] as $vvv)
                <option value="{{ $vvv }}" @if($data->$column_name == $vvv) selected @endif>{{ ucwords(str_replace("_", " ", $vvv)) }}</option>
                @endforeach
            </select>
        </div>
    @elseif($value['view_form_type'] == 'textarea')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ $name }}</label>
            <textarea name="{{ $column_name }}"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
        </div>
    @endif
@endif
@endforeach