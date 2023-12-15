@foreach($directories as $directory)
	<a href="{{ $directory }}"> {{ basename($directory) }} </a>
@endforeach

{{-- @foreach($files as $file)
	<a href=""> {{ $file }} </a>
@endforeach --}}