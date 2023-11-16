<div>
    <div class="p-3 mb-3">
        <nav aria-label="Page navigation example">
            @if ($paginator->hasPages())
                <ul class="pagination">
                    <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1"
                            aria-disabled="true">Anterior</a>
                    </li>
                    @foreach ($paginator->links()->elements as $links)
                        @foreach ($links as $link)
                            <li class="page-item {{ $link == $paginator->url($paginator->currentPage()) ? 'active' : '' }}">
                                <a class="page-link" href="{{ url($link) }}">{{ $loop->iteration }}</a>
                            </li>
                        @endforeach
                    @endforeach
                    <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Próxima</a>
                    </li>
                </ul>
            @endif
        </nav>
    </div>
</div>
