<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <h3>Tính Chỉ số BMI theo chiều cao và cân nặng</h3>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 form">
                <form name="hw" action="get.php" method="get">
                    <div class="form-hw">
                        <label for="">Chiều Cao</label>
                        <input name="chieucao" type="text" placeholder="cm"/>
                    </div>

                    <div class="form-hw">
                        <label for="">Cân Nặng</label>
                        <input name="cannang" type="text" placeholder="kg"/>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>