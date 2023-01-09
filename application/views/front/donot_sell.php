<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $website_title; ?></title>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            color: black;
            font: 14px Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        #content {
            margin-left: auto;
            margin-right: auto;
            margin-top: 25px;
            width: 38%;
            background-color: #ffffff;
            padding: 15px;
            overflow: none;
        }

        @media screen and (max-width: 1200px) {
            #content {
                width: 50%;
            }
        }

        @media screen and (max-width: 1000px) {
            #content {
                width: 60%;
            }
        }

        @media screen and (max-width: 600px) {
            #content {
                width: 70%;
            }
        }

        @media screen and (max-width: 400px) {
            #content {
                width: 95%;
            }
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding: 15px 15px 15px 15px;
            border-color: #cecece;
            width: 280px;
        }

        input[type=text] {
            padding: 15px 15px 15px 15px;
            border-color: #cecece;
            width: 250px;
        }

        button {
            border: 1px solid #cccccc;
            border-radius: 18px;
            cursor: pointer;
            padding: 10px;
            width: 250px;
            background: #3399ff;
            color: #ffffff;
        }

        button:disabled,
        button[disabled] {
            background: #ffffff;
            color: #cccccc;
        }
    </style>

    <script>
        function checkFunc() {
            $(':input[type="submit"]').prop('disabled', true);

            if ($("input:radio[name='type']").is(":checked") && $("input:radio[name='request']").is(":checked") && $(
                    '#email').val().length > 5 && ValidateEmail($('#email').val()) == true) {
                $(':input[type="submit"]').prop('disabled', false);
            }
        }

        function ValidateEmail(mail) {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
                return (true);
            }
            return (false);
        }
    </script>
</head>

<body>

    <div id="content">
        <h1>Personal Data Requests - California & All Other States Included</h1>
        <?php $this->common_model->showAlertMsg();?>
        <form action="<?php echo base_url('front/donotSellSubmit')?>" method="post">
            <strong>Type of request - I am requesting:</strong><br /><br />

            <label for="access">
                <table>
                    <tr>
                        <td><input type="radio" name="type" id="access" value="access" onclick="checkFunc();" /></td>
                        <td>Access to a copy of my Personal Data held by the controller of the website selected below.
                        </td>
                    </tr>
                </table>
            </label>

            <br />

            <label for="deletion">
                <table>
                    <tr>
                        <td><input type="radio" name="type" id="deletion" value="deletion" onclick="checkFunc();" />
                        </td>
                        <td>Deletion of my Personal Data held by the controller of the website selected below and my
                            account with that website.</td>
                    </tr>
                </table>
            </label>

            <br />

            <label for="deletion">
                <table>
                    <tr>
                        <td><input type="radio" name="type" id="sell" value="sell" onclick="checkFunc();" /></td>
                        <td>Do no sell my Personal Data.</td>
                    </tr>
                </table>
            </label>

            <br /><br /><br />

            <strong>The website* to which you would like to apply your request:</strong><br /><br />
            <select name="site">
                <option value="SignatureSurveys"><?php echo base_url();?></option>
            </select>


            <br /><br /><br />

            <strong>Please enter the email address* that you used on the website selected above:</strong><br /><br />
            <input type="text" name="email" id="email" onkeydown="checkFunc();" autocomplete="off" />

            <br /><br /><br />

            <strong>Choose one:</strong><br /><br />
            <input type="radio" name="request" id="owner" value="own" onclick="checkFunc();" /> I am making this request
            on my own behalf.
            <br /><br />
            <input type="radio" name="request" id="someoneelse" value="someoneelse" onclick="checkFunc();" /> I am
            making this request on behalf of someone else.

            <br /><br /><br />

            Users with disabilities (and any other users) who wish to Request to Know or opt-out of the sale of their
            personal information can also contact us by calling us at 1-855-950-2595 during business hours.

            <br /><br /><br />

            <strong>CALIFORNIA RESIDENTS</strong> - To the extent required by the California Consumer Protection Act
            (CCPA): California residents who want to know what Personal Information (as defined in the CCPA) we maintain
            about them may send a Request to Know using the webform below or by calling us at 1-855-950-2595 during
            business hours. We will confirm receipt of your Request within 10 days and fulfil your request within 45
            days, or up to 90 days if we notify you as to why we need more time. You will first be required to prove
            your identity as required by the CCPA and as set forth in our Privacy Notice to California Residents. If we
            cannot successfully verify your identity, or if the information would be too sensitive to disclose, we may
            not be able to provide the Personal Information to you. You may only submit 2 Requests to Know per year.

            <br /><br />

            By clicking <strong>Submit Request</strong>, I authorize the controller of the website selected above to
            contact me to verify my request and to perform the <strong>Type of Data Request</strong> selected above.
            Your request will not be performed until we are able to verify your identity, and the identity and authority
            of anyone who may attempt to act on behalf of another person, in accordance with applicable law. Any request
            may be denied if it cannot be verified.

            <br /><br />

            <button type="submit" id="sbutton" disabled=""><span>Submit request</span></button>

        </form>

        <br /><br />
    </div>
</body>

</html>