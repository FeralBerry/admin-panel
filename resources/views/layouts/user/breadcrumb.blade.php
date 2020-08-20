<div id="breadcrumb-container">
    <div class="container">
        <ul class="breadcrumb">
            @if(isset($breadcrumb))
                <li><a href="{{ route('index') }}">Home</a></li>
                @if(isset($cat))
                    @foreach($cat as $c)<li><a href="{{ route('product', $c->id) }}">{{ $c->title }}</a></li>@endforeach
                @endif
                <li class="active">{{ $breadcrumb }}</li>
            @endif
            @if(!isset($breadcrumb))
                <li><a href="{{ route('index') }}">Home</a></li>
            @endif
        </ul>
    </div>
</div>

