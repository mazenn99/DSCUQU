@if(session('msg'))
    <div class="btn text-uppercase btn-lg btn-outline-success btn-block my-3" type="text">
        {{session('msg')}}
    </div>
@endif
