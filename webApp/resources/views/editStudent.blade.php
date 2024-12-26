<html>



<form action="/saveStudent" method="POST">
            @csrf
            <div class="row align-items-start">
                <div class=".col-md-6">
                    <input class="form-control mr-sm-1" type="search" id="stuID" name="stuID" placeholder="Student ID"
                        aria-label="StudentID">
                    
                    <input class="form-control mr-sm-1" type="search" id="stuName" name="stuName" placeholder="Student Fullname"
                        aria-label="Student Fullname">
                        
                    <input class="form-control mr-sm-1" type="search" id="id" name="id" placeholder="id"
                        aria-label="id" type="hidden">
                </div>
                <div class=".col-md-6">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
                </div>
            </div>
        </form>
</html>