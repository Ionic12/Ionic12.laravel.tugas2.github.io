@extends('main')
@section('area')
<div class="slider">
    <div class="rectangle">
        <div class="load">
        </div>
        <div class="masuk">
            <br>
            <h1>Comment</h1>
            <form action="prosesPendaftaran.php" method="post">
                <div class="form-outline mb-4">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="username" style="width: 200px;">
                </div>
                <div class="form-outline mb-4">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email" style="width: 200px;">
                </div>
                <div class="form-outline mb-4">
                    <label>Theme</label>
                    <input type="text" name="tema" class="form-control" id="exampleFormControlInput1" placeholder="theme" style="width: 200px;">
                </div>
                <div class="form-outline mb-4">
                    <label>Comment</label>
                    <textarea type="textarea" name="comment" class="form-control" id="exampleFormControlInput1" placeholder="comment" style="width: 200px;"></textarea>
                </div>
                <button type="submit" name="simpan" class="btn btn-primary btn-block" style="width: 200px; transform: translate(-3%,0%);">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection