<h1>Create Page</h1>
<form action="/create" method="post">
    @csrf
    <p>
        fname <input type="text" name="fname">
    </p>
    <p>
        lname <input type="text" name="lname">
    </p>
    <p>
        student id <input type="text" name="student id">
    </p>
    <p>
        <button>Submit</button>
    </p>




</form>
