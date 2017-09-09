@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
        @else
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><li class="page-item">&laquo;</li></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($posts as $post)
            {{-- "Three Dots" Separator --}}
            @if (is_string($post))
                <li class="page-item disabled"><span class="page-link">{{ $post }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($post))
                @foreach ($post as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <a class="page-link" href="{{ $url }}"><li class="page-item">{{ $page }}</li></a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><li class="page-item">&raquo;</li></a>
        @else
            <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
        @endif
    </ul>
@endif
