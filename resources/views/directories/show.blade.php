

<x-layouts.layout>
	
	<x-layouts.buttoncreate />
	
		
	@foreach($directories as $directory)
		<x-card route="{{ $directory }}">
			{{ basename($directory) }}
		</x-card>
	@endforeach

	{{-- @dd($files) --}}
	<div class="row">
		
		@foreach($files as $file)
			
			<img 
				src="{{ Storage::disk("system")->url($file) }}" 
				alt="error"
				class="img-thumbnail rounded mx-auto d-block"
				style="width: 200px; height: 200px;"
			>
			
		@endforeach
	</div>

</x-layouts.layout>