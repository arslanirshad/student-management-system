<div class="card mb-3">
    <img src="https://www.homeworkhelpglobal.com/wp-content/uploads/2019/03/studying-student-on-desk.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Enter the information of the new student</h5>
        <form action="{{ url('/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>CNE</label>
                <input name="cne" type="text" class="form-control"  placeholder="Enter cne">
            </div>
            <div class="form-group">
                <label>First Name</label>
                <input name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
            </div>
            <div class="form-group">
                <label>Second Name</label>
                <input name="secondName" type="text" class="form-control"  placeholder="Enter second name">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input name="age" type="text" class="form-control"  placeholder="Enter the Age">
            </div>
            <div class="form-group">
                <label>Speciality</label>
                <input name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
            </div>
            <input type="submit" class="btn btn-info" value="Save">
            <input type="reset" class="btn btn-warning" value="Reset">
        </form>
    </div>
</div>