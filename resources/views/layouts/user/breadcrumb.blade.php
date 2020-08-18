<div id="breadcrumb-container">
    <div class="container">
        <ul class="breadcrumb">
            @if(isset($breadcrumb))
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">{{ $breadcrumb }}</li>
            @endif
            @if(!isset($breadcrumb))
                <li><a href="{{ route('index') }}">Home</a></li>
            @endif
        </ul>
    </div>
</div>

