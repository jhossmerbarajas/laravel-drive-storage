<div class="dropdown mt-3 mb-5">
	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
	    New
	</button>
	<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
	    <li>
	    	<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#directory" href="#"> 
	    		Folder 
	    	</a>
	    </li>
	    <li>
	    	<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#file" href="#"> 
	    		File 
	    	</a>
	    </li>
	   <li>
	   		<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#images" href="#"> 
	   			Image 
	   		</a>
	   	</li>
	</ul>
</div>

<x-layouts.partials.modal 
	id="directory" 
	name="directory"
	type="text"
/>

<x-layouts.partials.modal 
	id="file" 
	name="file"
	type="file"
/>