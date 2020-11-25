
@if ($paginator->hasPages())
    
    @foreach ($elements as $element)
        
        @if (is_string($element))
            <a class="page page--disabled">{{ $element }}</a>
        @endif
        
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <a class="page page--active">{{ $page }}</a>
                @else
                    <a class="page" href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

@endif 