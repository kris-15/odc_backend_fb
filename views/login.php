<?php
include '../apps/header.php'
?>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-3 bg-light"></div>
        <div class="col-md-9">
            <form>
                <div class="row m-2">
                    <div class="col-md-4">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                    </div>
                    <div class="col-md-8">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>   
                </div>
                <div class="row m-2">
                    <div class="col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                    </div>
                    <div class="col-md-8">
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>   
                </div>
                <div class="d-flex justify-content-end ">
                    <button type="submit" class="btn btn-primary mx-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>