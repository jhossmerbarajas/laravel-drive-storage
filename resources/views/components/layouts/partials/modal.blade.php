<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="createDir" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
	    	<div class="modal-header">
	        	<h5 class="modal-title" id="createDir"> {{ $name }} </h5>
	        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      	</div>
		    <div class="modal-body">
		     	
		   
			  	<x-form method="post" :action="url()->current()">
			
				   	<x-input type="{{ $type }}" label="{{ $name }}" name="{{ $name }}"/>
				    
				    <x-input class="btn btn-primary" name="save" type="submit" value="Save" />
			    </x-form>

		    </div>
		</div>
	</div>
</div>