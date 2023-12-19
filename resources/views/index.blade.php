<x-layouts.layout>
	
	<x-layouts.buttoncreate />
		
	@foreach($directories as $directory)
		<x-card route="{{ $directory }}">
			{{ basename($directory) }}
		</x-card>
	@endforeach

	<div class="row mt-5">
		@foreach($files as $file)
		
		<img 
			src="{{ Storage::disk("system")->url($file) }}" 
			alt="error"
			style="width: 200px; height: 200px;"
		>
		
	@endforeach
	</div>

</x-layouts.layout>