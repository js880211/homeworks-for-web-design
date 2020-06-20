<?php
// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST["checkbox"];
    foreach ($names as $name) {
        echo $name . "<br>";
    }
}
?>
<html>

<head></head>

<body>
    <!--
    BEFORE RUNNING:
    ---------------
    1. If not already done, enable the Google Sheets API
       and check the quota for your project at
       https://console.developers.google.com/apis/api/sheets
    2. Get access keys for your application. See
       https://developers.google.com/api-client-library/javascript/start/start-js#get-access-keys-for-your-application
    3. For additional information on authentication, see
       https://developers.google.com/sheets/api/quickstart/js#step_2_set_up_the_sample
    -->
    <script>
        function makeApiCall() {
            var spreadsheetBody = {
                // TODO: Add desired properties to the request body.
                "properties": {
                    "title": "動漫列表"
                }
            };
            var request = gapi.client.sheets.spreadsheets.create({}, spreadsheetBody);
            request.then(function(response) {
                // TODO: Change code below to process the `response` object:
                console.log(response.result);
                console.log(response.result.spreadsheetId);
                var params = {
                    // The ID of the spreadsheet to update.
                    spreadsheetId: response.result.spreadsheetId, // TODO: Update placeholder value.

                    // The A1 notation of the values to update.
                    range: "Sheet1!A1:D5", // TODO: Update placeholder value.

                    // How the input data should be interpreted.
                    valueInputOption: "RAW", // TODO: Update placeholder value.
                };
                var body = {
                    values: values
                };
                gapi.client.sheets.spreadsheets.values.update(params).then((response) => {
                    var result = response.result;
                    console.log(`${result.updatedCells} cells updated.`);
                });
            }, function(reason) {
                console.error('error: ' + reason.result.error.message);
            });
        }

        function initClient() {
            var API_KEY = 'AIzaSyCJHoO4_5fpyTPgfndmOG-KEwwNI-_D9Iw'; // TODO: Update placeholder with desired API key.

            var CLIENT_ID = '1091968325868-n5naimcdqtp3aofgi24q83qrg4flguh4.apps.googleusercontent.com'; // TODO: Update placeholder with desired client ID.

            // TODO: Authorize using one of the following scopes:
            //   'https://www.googleapis.com/auth/drive'
            //   'https://www.googleapis.com/auth/drive.file'
            //   'https://www.googleapis.com/auth/spreadsheets'
            var SCOPE = 'https://www.googleapis.com/auth/spreadsheets';

            gapi.client.init({
                'apiKey': API_KEY,
                'clientId': CLIENT_ID,
                'scope': SCOPE,
                'discoveryDocs': ['https://sheets.googleapis.com/$discovery/rest?version=v4'],
            }).then(function() {
                gapi.auth2.getAuthInstance().isSignedIn.listen(updateSignInStatus);
                updateSignInStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
            });
        }

        function handleClientLoad() {
            gapi.load('client:auth2', initClient);
        }

        function updateSignInStatus(isSignedIn) {
            if (isSignedIn) {
                makeApiCall();
            }
        }

        function handleSignInClick(event) {
            gapi.auth2.getAuthInstance().signIn();
        }

        function handleSignOutClick(event) {
            gapi.auth2.getAuthInstance().signOut();
        }
    </script>
    <script async defer src="https://apis.google.com/js/api.js" onload="this.onload=function(){};handleClientLoad()" onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>
    <button id="signin-button" onclick="handleSignInClick()">輸出到GOOGLE表單</button>
</body>

</html>