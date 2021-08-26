<?php
require_once '../bootstrap.php';
?>

<p class="version"><i>API Dash v1.0.0</i></p>

<div class=" container controls-wrapper">
    <div class="row">
<div class="container col mt-4 commands">
    <p>API Status</p>
    <div class="circle-wrapper">
    <div id="ready" class=" circle yellow"></div>
    <div id="working" class=" circle green "></div>
    <div id="stop" class=" circle red"></div>
    </div>
    <div class="commands-wrapper mt-3">
        <button id="start" type="button" class="btn btn-success">Start</button>
        <button id="stop-btn" type="button" class="btn btn-danger">Stop</button>
    </div>
</div>
    <div class=" col container uploads">
        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload file</label><br>
                <small id="emailHelp" class="form-text text-muted">Supported formats csv, xls, xlxs.</small><br>
                <input type="file" class="form-control-file mt-3" id="exampleFormControlFile1"><br>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
        </form>
    </div>
        <div class="col-sm">
            <form>
                <div class="form-group">
            <select class="form-select" aria-label="manufacturers">
                <option selected>Select manufacturer</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Show products</button>
                </div>
            </form>
        </div>
</div>
</div>
<div class="container mt-5">
<table class="table">
    <thead>
    <tr>
        <th scope="col">product id</th>
        <th scope="col">sku</th>
        <th scope="col">name</th>
        <th scope="col">price</th>
        <th scope="col">status</th>
        <th scope="col">sezona</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>12334</td>
        <td>234455</td>
        <td>Sava Trenta</td>
        <td>12345</td>
        <td>1</td>
        <td>Zimska</td>
    </tr>
    </tbody>
</table>
</div>
