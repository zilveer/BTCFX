<?php
use app\models\Parameters;
use app\models\Pages;
use lithium\core\Environment; 
$Comm = Parameters::find('first');


?>
<h2>Welcome to <?php echo COMPANY_NAME; ?></h2>
	<h4><?php echo COMPANY_NAME; ?> is a Digital Currency exchange, offering a secure and safe method for individuals and businesses to buy or sell bitcoins and other viable cryptocurrencies.</h4>
	<div class="row">
			<div id="one"  onclick="location.href='/users/signup';" style="cursor:pointer;"  class="col-md-4 boxes">
					<h3>The Markets You Want</h3>
					<ul>
					<li>Bitcoin / GBP</li>
					<li>Bitcoin / USD</li>
					<li>GBP / USD</li>
					</ul>
					<p>Trade in the currency you choose, but with a GBP/USD market you get faster access to arbitrage opportunities.</p> 
			</div>
			<div id="two" onclick="location.href='/ex/x/btc_gbp';" style="cursor:pointer;"  class="col-md-4 col-sm-4 boxes">
					<h3>Easy Deposit &amp; Withdraw</h3>
					<h4>No more international wire transfers!</h4>
					<p>We use GBP and USD backed colored coins for deposits and withdrawals. Meaning you can quickly withdraw your funds at any time and not worry about intrusive questions from the banks.</p>
			</div>
			<div id="three"  class="col-md-4 col-sm-4 boxes">
					<h3>The Security You Need</h3>
					<p>Our exchange is built and maintained by experienced IT personnel. We follow all industry standard security practices and more, including:</p>
					<ul>
					<li>2 Factor Authentication</li>
					<li>Cryptocurrencies held in cold storage, not online</li>
					<li>SSL 256bit encryption and a dedicated server</li>
					</ul>
			</div>
	</div>
	<div class="row">
			<div class="col-xs-12 col-sm-8">
					
					<h4 class="iconArticle" >Buy and Sell Bitcoins, and other Cryptocurrency via IBWT, low verification, a secure platform, easy to withdraw and deposit. Shop direct from IBWT or withdraw your coins to your own wallet at your own leisure.</h4>
					<ul class="home-bullets">
					 <li> <i class="fa fa-star"></i> Fees are <strong><?=$Comm['value']?>%</strong> per transaction</li>
					 <li>Simple verification means you could be a full customer in a matter of days</li>
					 <li>Security ensured with Cold Storage, SSL 256bit encryption & 2FA</li>
					 <li>Dedicated Server for an enhanced customer experience</li>
					 <li>Deposits via OKPAY or secure mail services.</li>
					 <li>Withdrawal via OKPAY, secure mail services or via banks.</li>
					</ul>
		</div>
	</div>
	<div class="row">	
		<h2>Find us</h2>
		<a  target="_blank" href="https://www.facebook.com/pages/IBWT/425446187570505"><img src="/img/Facebook-logo.png" alt="Facebook" width="30px" title="Facebook"></a>
		&nbsp;&nbsp;
		<a target="_blank" href="https://twitter.com/IBWTofficial"><img src="/img/twitter.jpg" alt="Twitter" width="30px" title="Twitter"></a>
		&nbsp;&nbsp;
		<a target="_blank" href="http://www.reddit.com/r/IBWTofficial/"><img src="/img/reddit.jpg" alt="Reddit" width="30px" title="Reddit"></a>
		&nbsp;&nbsp;
<a href="https://bitcointalk.org/index.php?topic=397625.0" target="_blank"><img src="/img/bitcointalk_logo.jpg.png" alt="Bitcoin talk" width="30px" title="bitcoin talk"></a>
		&nbsp;&nbsp;
		<a href="https://plus.google.com/b/100582829535245250566/100582829535245250566/about?hl=en" target="_blank"><img src="/img/google.png" width="30px" alt="Google+" title="Google+"></a>
		&nbsp;&nbsp;
		<a href="https://www.linkedin.com/company/in-bitcoin-we-trust-jd-ltd" target="_blank"><img src="/img/linkedin.jpg" width="30" alt="LinkedIn" title="Linkedin"></a>
</div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
