<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&display=swap"
        rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="style/index.css" type="text/css">

    <!-- js -->
    <script type="text/javascript" src="js/index.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous">
        </script>

    <!-- Title -->
    <link rel="icon" type="image/jpg" href="img/logo.png">
    <title>UTC</title>
</head>

<body>

    <!-- Heading -->
    <div class="header">
        <img src="img/logo.png" alt="Logo" class="prevent_select">

        <h1 class="font title">Unique Tution Classes</h1>
    </div>
    <!-- Heading END -->

    <!-- Registration form -->
    <Form class="border">
        <h5 class="form_title">Registration Form </h5>

        <!-- NAME -->
        <div class="content_box border">

            <h5 class="form_title">Name:</h5>
            <!-- SURNAME -->
            <div class="box">
                <input type="text" name="surnm" id="surnm" placeholder=" " />
                <label for="surnm" class="surnm_lbl">Surname</label>
            </div>
            <!-- NAME -->
            <div class="box">
                <input type="text" name="nm" id="nm" placeholder=" " />
                <label for="nm" class="nm_lbl">Stud Name</label>
            </div>
            <!-- Father Name -->
            <div class="box">
                <input type="text" name="fnm" id="fnm" placeholder=" " />
                <label for="fnm" class="fnm_lbl">Father Name</label>
            </div>
            <!-- DOB -->
            <div class="box dob">
                <input type="date" name="dob" id="dob" placeholder=" "/>
                <label for="dob" class="dob_lbl">Date of Birth</label>
            </div>
        </div>

        <!-- NAME END -->

        <!-- Address -->
        <div class="content_box">
        <div class="box">
            <textarea id="address" name="address" placeholder=" " autocomplete="address-level1"></textarea>
            <label for="address" class="address_lbl">Address :</label>
        </div>
        </div>
        <!-- Address END -->

        <!-- contect -->
        <div class="content_box">

            <!-- Stud Mo no. -->
            <div class="box">
                <input type="text" name="stmono" id="stmono" placeholder=" " />
                <label for="stmono" class="stmono_lbl">Stud Mobile No.</label>
            </div>
            <!-- Parent No. -->
            <div class="box">
                <input type="text" name="pmono" id="pmono" placeholder=" " />
                <label for="pmono" class="pmono_lbl">Parent Mobile No.</label>
            </div>
            <!-- email -->
            <div class="box">
                <input type="text" name="email" id="email" placeholder=" " />
                <label for="email" class="email_lbl">E-mail</label>
            </div>

        </div>

        <!-- contect END -->

        <!-- Study details -->
        <div class="content_box selectbox">
            <!-- Standard -->
            <div class="box">
                <label for="standard" class="standard_lbl">Standard :-</label>
                <select name="standard" id="standard">
                    <option value="L.K.G">L.K.G</option>
                    <option value="H.K.G">H.K.G</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <!-- STREAM -->
            <div class="box">
                <label for="stream" class="stream_lbl">Stream :-</label>
                <select name="stream" id="stream">
                    <option value="science">Science</option>
                    <option value="commerce">Commerce</option>
                    <option value="arts">Arts</option>
                </select>
            </div>
            <!-- medium -->
            <div class="box">
                <label for="med" class="med_lbl">Medium :-</label>
                <select name="med" id="med">
                    <option value="gujarati">Gujarati</option>
                    <option value="english">English</option>
                </select>
            </div>
            <!-- Board -->
            <div class="box">
                <label for="board" class="board_lbl">Board :-</label>
                <select name="board" id="board">
                    <option value="GSEB">GSEB</option>
                    <option value="HSC">HSC</option>
                </select>
            </div>
        </div>

        <!-- Standard END -->

        <!-- School Details -->
        <div class="content_box">

            <!-- School Name -->
            <div class="box">
                <input type="text" name="snm" id="snm" placeholder=" "/>
                <label for="snm" class="snm_lbl">School Name</label>
            </div>
            <!-- School Address -->
            <div class="box saddress">
                <textarea name="saddress" id="saddress" placeholder=" "></textarea>
                <label for="saddress" class="saddress_lbl">School Address</label>
            </div>
            <!-- school time -->
            <div class="box stime">
                <input type="time" name="stime_start" id="stime_start" />
                <span>To</span>
                <input type="time" name="stime_end" id="stime_end" />
                <label for="stime_end" class="stime_start_lbl">School Time</label>
            </div>

        </div>
        <!-- School Details END -->

        <!-- Btn box -->
        <div class="btn_box">
            <input type="reset"  name="reset" Value="cancel" />
            <input type="submit" name="register" value="Register" />
        </div>
        <!-- Btn box END -->
    </Form>
    <!-- Registration form END -->

    <!-- about -->

    <div class="about">
        <h3>About :-</h3>
        <ul type="circle">
            <li>
                <p>Welcome to the great UTC,</p>
            <li>
                <p>Fill the Details carefully.</p>
            <li>
                <p>ask Mr.Jay Yogesh(Principle of UTC) for any query.</p>
    </div>
    <!-- about END -->
</body>

</html>