<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{route('idea-created')}}" method="post">
        @csrf
        <div class="mb-3">
            <textarea class="form-control" name="idea" rows="3"></textarea>
            @error('idea')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="">
            <button type = "submit" class="btn btn-dark"> Share </button>
        </div>
    </form>

</div>
