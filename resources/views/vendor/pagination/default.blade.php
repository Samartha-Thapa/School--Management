@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            <div class="flex space-x-2 text-lg">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>    </span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                <div class="flex flex-row space-x-2">
                    @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="active" aria-current="page"><span class="rounded border-2 p-1 border-gray-400">{{ $page }}</span></li>
                    @else
                    <li><a class="rounded border-2 p-1 border-gray-400" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                    @endforeach
                </div>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </div>

        </ul>
    </nav>
@endif
