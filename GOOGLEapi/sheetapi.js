var API_KEY = 'AIzaSyCJHoO4_5fpyTPgfndmOG-KEwwNI-_D9Iw';
var CLIENT_ID = '1091968325868-n5naimcdqtp3aofgi24q83qrg4flguh4.apps.googleusercontent.com';
var SCOPE = 'https://www.googleapis.com/auth/spreadsheets';
function initClient(){
    gapi.client.init({
    'apiKey': API_KEY,
    'clientId': CLIENT_ID,
    'scope': SCOPE,
    'discoveryDocs': ['https://sheets.googleapis.com/$discovery/rest?version=v4'],
}).then(function () {
    gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);
    updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
});}
function updateSigninStatus(isSignedIn) {
    if (isSignedIn) {
        authorizeButton.style.display = 'none';
        signoutButton.style.display = 'block';
        listMajors();
    } else {
        authorizeButton.style.display = 'block';
        signoutButton.style.display = 'none';
    }
}
function handleAuthClick(event) {
    gapi.auth2.getAuthInstance().signIn();
}
function handleClientLoad() {
    gapi.load('client:auth2', initClient);
  }