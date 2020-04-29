@if (count($breadcrumbs))

    <nav id="breadcrumb">
    	<div class="nav-wrapper">
    		<div class="col s12">
		        @foreach ($breadcrumbs as $breadcrumb)
		            @if ($breadcrumb->url && !$loop->last)
		            <a href="{{ $breadcrumb->url }}" class="breadcrumb">{{ $breadcrumb->title }}</a>
		            @else
		            <a class="breadcrumb">{{ $breadcrumb->title }}</a>
		            @endif
		        @endforeach
    		</div>
    	</div>
   </nav>

@endif