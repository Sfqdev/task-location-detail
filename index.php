<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/app.js" type="text/javascript" ></script>
	
    </head>
    <body>
        <div class="container">
            <div class="text-center my-3">
                <h1>Location Coordinates</h1>
                <div class="card">
                    <div class="card-body bg-secondary bg-opacity-10">
                    <div class="row">
                        <div class="col-8">
                            <input type="text" class="form-control" id="textSearch">
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary" onclick="searchAddress()">Search</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div id="divLocaion"></div>
        </div>
    </body>
</html>