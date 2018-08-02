@if ($paginator->lastPage() > 1)
<div class="pagination flex flexJustifyContentCenter">
	<a href="{{ $paginator->url(1) }}" class="btn btn-sm btn-dark {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}"><<</a>
	<a href="#" class="btn btn-sm btn-dark {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}"><</a>
	@for($i = 1; $i <= $paginator->lastPage(); $i++)
	<a href="{{ $paginator->url($i) }}" class="btn btn-sm btn-dark {{($paginator->currentPage() == $i) ? 'active' : '' }}">{{$i}}</a>
	@endfor
	<a href="{{ $paginator->nextPageUrl() }}" class="btn btn-sm btn-dark" {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}>></a>
	<a href="{{ $paginator->url($paginator->lastPage()) }}" class="btn btn-sm btn-dark" {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}>>></a>
</div>
@endif