@extends('layouts.master')
@section('content')

	<div class="pull-right">
        <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
    </div>
	<div class="row">
		<div class="col-sm-8 offset-sm-2">
			<form action="{{route('update')}}" method = "post">
				@csrf
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name = "name" id = "firstname" class="form-control" required value = "{{$product->name}}">
				</div>
				<div class="form-group">
					<label for="tittle">Tittle:</label>
					<input type="text" name = "tittle" id = "lastname" class="form-control" required value = "{{$product->tittle}}">
				</div>
				<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
                <select type="text" name="gender"class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required value = "{{$product->gender}}">
                    <option selected>Choose...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
				<div class="form-group">
					<label for="description">Description:</label>
					<input type="text" name = "description" id = "department" class="form-control" required value = "{{$product->description}}">
				</div>
				<div class="form-group">
					<label for="country">Country:</label>
					<input type="text" name = "country" id = "phone" class="form-control" required value = "{{$product->country}}">
				</div>
				<div class="form-group">
					<label for="city">City:</label>
					<input type="text" name = "city" id = "phone" class="form-control" required value = "{{$product->city}}">
				</div>
				<div class="form-group">
					<label for="address">Address:</label>
					<input type="text" name = "address" id = "phone" class="form-control" required value = "{{$product->address}}">
				</div>
				<div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input"name="file" required value= "{{ $product->file }}">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div><br>
				<input type="hidden" name="id" value = "{{$product->id}}">
				<button type = "submit" class = "btn btn-success">Submit</button>
			</form>
		</div>
	</div>
@endsection