@if ($paginator->hasPages())
    <div class="paginationWrap">
        <ul class="pagination" id="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <i class="material-icons">chevron_left</i></a>
                </li>
            @else
                <li class="waves-effect">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="material-icons">chevron_left</i></a></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="waves-effect disabled" aria-disabled="true"><a class="page-link">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="waves-effect active" aria-current="page"><a class="page-link">{{ $page }}</a></li>
                        @else
                            <li class="waves-effect"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="waves-effect">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="material-icons">chevron_right</i></a>
                </li>
            @else
                <li class="waves-effect disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <i class="material-icons">chevron_right</i></a>
                </li>
            @endif
        </ul>
    </div>
@endif
