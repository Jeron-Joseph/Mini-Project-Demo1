 // Your web app's Firebase configuration
 <script>
      var firebaseConfig = {
        apiKey: "AIzaSyDHACyRGtwqYD4foog5Aqlcejrj19BZbSg",
  authDomain: "ionicauth-1e3f9.firebaseapp.com",
  projectId: "ionicauth-1e3f9",
  storageBucket: "ionicauth-1e3f9.appspot.com",
  messagingSenderId: "253272394495",
  appId: "1:253272394495:web:5fe28e329ce7c5cc26daca"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);

      document.getElementById('dashboard').style.display="none"

      document.getElementById('login').addEventListener('click', GoogleLogin)
      document.getElementById('logout').addEventListener('click', LogoutUser)

      let provider = new firebase.auth.GoogleAuthProvider()

      function GoogleLogin(){
        console.log('Login Btn Call')
        firebase.auth().signInWithPopup(provider).then(res=>{
          console.log(res.user)
          document.getElementById('LoginScreen').style.display="none"
          document.getElementById('dashboard').style.display="block"
          showUserDetails(res.user)
        }).catch(e=>{
          console.log(e)
        })
      }

      function showUserDetails(user){
        document.getElementById('userDetails').innerHTML = `
          <img src="${user.photoURL}" style="width:10%">
          <p>Name: ${user.displayName}</p>
          <p>Email: ${user.email}</p>
        `
      }

      function checkAuthState(){
        firebase.auth().onAuthStateChanged(user=>{
          if(user){
            document.getElementById('LoginScreen').style.display="none"
            document.getElementById('dashboard').style.display="block"
            showUserDetails(user)
          }else{

          }
        })
      }

      function LogoutUser(){
        console.log('Logout Btn Call')
        firebase.auth().signOut().then(()=>{
          document.getElementById('LoginScreen').style.display="block"
          document.getElementById('dashboard').style.display="none"
        }).catch(e=>{
          console.log(e)
        })
      }
      checkAuthState()
      </script>