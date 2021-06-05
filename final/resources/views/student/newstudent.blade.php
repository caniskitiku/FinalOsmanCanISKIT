<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-4 offset-md-4">
                <h4>New Student</h4>
                <hr>
                <form action="{{ route('student.save') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name."
                                value="{{ old('name') }}">                            
                        </div>
                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" class="form-control" name="surname" placeholder="Enter your surname."
                                value="{{ old('surname') }}">
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" class="form-control" name="department" placeholder="Enter department name." 
                            value="{{old('department')}}">
                            
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                        <br>
                        
                    </form>
            </div>
        </div>
    </div>
</body>