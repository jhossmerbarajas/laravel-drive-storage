@props(["method"])

<form {{ $attributes }}
	method="{{ $method == "get" ? "get" : "post"  }}"
	enctype="multipart/form-data"
>
	@if( $method != "get")
		@csrf
	@endif

	@if(in_array(strtolower($method), ["put", "patch", "delete"]))
		@method($method)
	@endif

	{{ $slot }}
</form>