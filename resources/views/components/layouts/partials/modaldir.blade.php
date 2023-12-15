<div class="modal fade" id="createDir" tabindex="-1" aria-labelledby="createDir" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
	    	<div class="modal-header">
	        	<h5 class="modal-title" id="createDir">Modal title</h5>
	        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      	</div>
		    <div class="modal-body">
		        
			    {{-- <form action="{{ route('file.store') }}" method="POST">
			    	@csrf
			        <div class="mb-3">
			            <label for="nameDir" class="form-label"> Name Dir </label>
			            <input type="nameDir" name="nameDir" class="form-control" id="nameDir" placeholder="nameDir">
			            @error("nameDir")
			                <span class="text-danger"> {{ $message }} </span>
			            @enderror
			        </div>

			        <div class="modal-footer">
					    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
			    </form> --}}

			    <x-form method="post" :action="route('file.store')">
				    <x-input label="Name Folder" name="name_folder"/>
				    <x-input class="btn btn-primary" name="save" type="submit" value="Save" />
			    </x-form>

		    </div>
		</div>
	</div>
</div>