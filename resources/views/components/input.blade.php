 <div class="mb-3">
 	@if($type != "submit")
	    <label for="{{ $name }}" class="form-label"> 
	    	{{ $label }} 
	    </label>
	@endif
    
    <input {{ $attributes->merge(["class" => "form-control"]) }}
    	@if($type == "submit")
    	    type="{{ $type }}" 
    		value="{{ $value }}"
    	@else
            type="{{ $type }}" 
        	name="{{ $name }}" 
        	id="{{ $name }}" 
        	placeholder="{{ ucfirst(str_replace("_", " ", $name)) }}"
        @endif
    />
    @error("{{ $name }}")
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>