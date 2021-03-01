<form method="post" action="/form" enctype="multipart/form-data">
    {{ csrf_field() }}
   
        <label for="Name" >Name</label>
            <input name="Name" type="text" class="form-control" id="Name" placeholder="Name" value="{{old('Name')}}">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <label for="titleid" >password</label>
            <input name="password" type="text" class="form-control" id="password"
                   placeholder="password" >
                   
  
            <button type="submit" class="btn btn-primary">Submit</button>
      
</form>
