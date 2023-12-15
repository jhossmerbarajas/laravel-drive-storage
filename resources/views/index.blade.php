<x-layouts.layout>
	
	<x-layouts.buttoncreate />
	

	@foreach($directories as $directory)
		<x-card route="{{ $directory }}">
			{{ basename($directory) }}
		</x-card>
	@endforeach

</x-layouts.layout>