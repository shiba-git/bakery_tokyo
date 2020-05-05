@if (count($breadcrumbs))
	<nav id="breadcrumb">
		<div class="nav-wrapper">
			<div class="col s12 l12">
				<ol class="breadcrumbList" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
		        @foreach ($breadcrumbs as $breadcrumb)
		            @if ($breadcrumb->url && !$loop->last)
		            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb">
		            	<a itemprop="item" href="{{ $breadcrumb->url }}" ><span itemprop="name">{{ $breadcrumb->title }}</span></a>
		            	<meta itemprop="position" content="{{ $loop->index }}">
		            </li>
		            
		            @else
		            <li itemprop="itemListElement" itemprop="item" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb">
		            	<a itemprop="item"><span itemprop="name">{{ $breadcrumb->title }}</span></a>
		            	<meta itemprop="position" content="{{ $loop->index }}">
		            </li>
		            
		            @endif
		        @endforeach
		       	</ol>
			</div>
		</div>
	</nav>
@endif


