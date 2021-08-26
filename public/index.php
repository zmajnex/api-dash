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
</div>
</div>
</div>
