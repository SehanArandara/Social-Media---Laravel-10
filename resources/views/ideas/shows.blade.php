<div class="card-body">
    @if($editing?? false)
        <form action="{{route('idea-update',$idea->id)}}" method="post">
            @csrf
            <div class="mb-3">
                <textarea class="form-control" name="idea" rows="3">{{$idea->content}}</textarea>
                @error('idea')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="">
                <button type = "submit" class="btn btn-dark"> Share </button>
            </div>
        </form>
           <p class="fs-6 fw-light text-muted">
                {{$idea->content}}
           </p>
        @endif
    <p class="fs-6 fw-light text-muted">
        {{$idea->content}}
    </p>
    <div class="d-flex justify-content-between">
        <div>
            <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                </span> {{$idea->likes}} </a>
        </div>
        <div>
            <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                {{$idea->created_at}} </span>
        </div>
    </div>
    <div>
        <div class="mb-3">
            <textarea class="fs-6 form-control" rows="1"></textarea>
        </div>
        <div>
            <button class="btn btn-primary btn-sm"> Post Comment </button>
        </div>

        <hr>
        <div class="d-flex align-items-start">
            <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi" alt="Luigi Avatar">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6 class="">Luigi
                    </h6>
                    <small class="fs-6 fw-light text-muted"> 3 hour
                        ago</small>
                </div>
                <p class="fs-6 mt-3 fw-light">
                    and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                    Evil)
                    by
                    Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                    very
                    popular during the Renaissan
                </p>
            </div>
        </div>
    </div>
</div>