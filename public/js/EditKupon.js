var firebaseConfig = {
    apiKey: "AIzaSyC9LHBmSyn2IonyOOiopmjBiGxhq1H1GA8",
    authDomain: "trashy-48e84.firebaseapp.com",
    databaseURL: "https://trashy-48e84.firebaseio.com",
    projectId: "trashy-48e84",
    storageBucket: "trashy-48e84.appspot.com",
    messagingSenderId: "898343539773",
    appId: "1:898343539773:web:860f308cd3807e2158c654",
    measurementId: "G-SN3QRGYJE9"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  var database = firebase.database();
  var auth = firebase.auth();

  function lihatKupon(){

  }

  function tambahKupon(){

  }

  var userId = firebase.auth().currentUser.uid;
    return firebase.database().ref('kupon' + kuponId).once('value').then(function(snapshot) {
  var kupon = (snapshot.val() && snapshot.val().username) || 'Anonymous';
});

  function writeUserData(userId, name, email, imageUrl) {
    firebase.database().ref('users/' + userId).set({
      username: name,
      email: email,
      profile_picture : imageUrl
    });
  }