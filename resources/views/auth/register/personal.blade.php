<div class="row">
    <div class="input-field col s12">
        <input id="name" name="name" type="text" class="validate" value="{{ old('name') }}" required autocomplete="name">
        <label for="name">@lang('info.name')</label>
        @error('name')
        <blockquote class="error">{{ $message }}</blockquote>
        @enderror
    </div>
    <div class="input-field col s12 m12 l6">
        <input id="place_of_birth" name="place_of_birth" type="text" class="validate" value="{{ old('place_of_birth') }}"
            required autocomplete="place_of_birth">
        <label for="place_of_birth">@lang('info.place_of_birth')</label>
        @error('place_of_birth')
        <blockquote class="error">{{ $message }}</blockquote>
        @enderror
    </div>
    <div class="input-field col s12 m12 l6">
        <input type="text" class="datepicker validate" id="date_of_birth" name="date_of_birth"
            value="{{ old('date_of_birth') }}" required onfocus="M.Datepicker.getInstance(date_of_birth).open();">
        <label for="date_of_birth">@lang('info.date_of_birth')</label>
        <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                firstDay: 1,
                yearRange: 50,
                maxDate: today,
            });
        });
        </script>
        @error('date_of_birth')
        <blockquote class="error">{{ $message }}</blockquote>
        @enderror


    </div>
    <div class="input-field col s12">
        <input id="mothers_name" name="mothers_name" type="text" class="validate" value="{{ old('mothers_name') }}"
            required>
        <label for="mothers_name">@lang('info.mothers_name')</label>
        @error('mothers_name')
        <blockquote class="error">{{ $message }}</blockquote>
        @enderror
    </div>
    <div class="input-field col s12">
        <input id="phone_number" name="phone_number" type="text" class="validate" value="{{ old('phone_number') }}"
            required>
        <label for="phone_number">@lang('info.phone_number')</label>
        @error('phone_number')
        <blockquote class="error">{{ $message }}</blockquote>
        @enderror
    </div>
</div>