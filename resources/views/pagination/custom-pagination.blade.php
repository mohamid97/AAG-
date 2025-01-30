@if ($paginator->hasPages())
    <div class="pagination-container d-flex">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <span class="disabled">{{ __('السابق') }}</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev">{{ __('السابق') }}</a>
        @endif

    <!-- Page Number Links -->
        <div class="page-links">
            @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="current">{{ $page }}</span>
                @else
                    <a href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach
        </div>

        <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next">{{ __('التالي') }}</a>
        @else
            <span class="disabled">{{ __('التالي') }}</span>
        @endif
    </div>
@endif
