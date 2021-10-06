@if ($paginator->hasPages())
    <ul class="pagination large">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a href="#!"><i class="mdi mdi-chevron-left"></i></a>
                </li>
            @else
                <li class="waves-effect">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <i class="mdi mdi-chevron-left"></i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="waves-effect disabled" aria-disabled="true">
                        {{ $element }}
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="waves-effect active" aria-current="page">
                                <a href="#">{{ $page }}</a>
                            </li>
                        @else
                            <li class="waves-effect">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="waves-effect">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <i class="mdi mdi-chevron-right"></i>
                    </a>
                </li>
            @else
                <li class="waves-effect disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </li>
            @endif
        </ul>
@endif