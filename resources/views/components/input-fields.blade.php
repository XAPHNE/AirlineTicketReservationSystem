<div class="form-group mb-3">
    <label for="{{$name}}" class="form-label">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control" placeholder="{{$placeholder}}" value="{{old('$name')}}" aria-describedby="{{$name}}Help">
    <small id="{{$name}}Help" class="text-muted">
        @error($name)
            {{$message}}
        @enderror
    </small>
</div>

