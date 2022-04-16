<div class="card mb-3">
    <img src="https://www.homeworkhelpglobal.com/wp-content/uploads/2019/03/studying-student-on-desk.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Update information of student</h5>
        <form action="{{ url('/update/'.$student->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label>CNE</label>
                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"  placeholder="Enter cne">
            </div>
            <div class="form-group">
                <label>First Name</label>
                <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
            </div>
            <div class="form-group">
                <label>Second Name</label>
                <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control"  placeholder="Enter second name">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter the Age">
            </div>
            <div class="form-group">
                <label>Speciality</label>
                <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
            </div>
            <input type="submit" class="btn btn-info" value="Update">
            <input type="reset" class="btn btn-warning" value="Reset">
        </form>
    </div>
</div>