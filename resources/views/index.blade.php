<x-layouts.layout>
	
	<x-layouts.buttoncreate />
	@foreach($directories as $directory)
		<a href="{{ route('file.show', $directory) }}"> {{ $directory }} </a>
	@endforeach

</x-layouts.layout>