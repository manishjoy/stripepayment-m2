# ManishJoy_StripePayment v1.0.0
## Magento 2 Extension

<img src="https://i.ibb.co/HTSydkJ/Stripe-logo-blue.png" alt="Stripe Payment Gateway" title="Stripe Payment Gateway" style="max-width:500px" />

### Free magento 2 extension to accept payment for orders via <span style="color: #6772e5;font-family: Arial, Helvetica, sans-serif;">stripe</span>

## Features:
1. Easy to use
2. Looks like core functionality of Magento (at backend as well as frontend)
3. Unencrypted code for easy customization

___________________________________________________________________________________________________

## Installation:
1. Go to Magento2 root folder

2. Enter following commands to install module:

    ```bash
    composer config repositories.manishjoystripe git https://github.com/manishjoy/stripepayment-m2.git
    composer require manishjoy/module-stripepayment:dev-master
    ```
   Wait while dependencies are updated.

3. Enter following commands to enable module:

    ```bash
    php bin/magento module:enable ManishJoy_StripePayment --clear-static-content
    php bin/magento setup:upgrade
    ```
4. Enable and configure Stripe in Magento Admin under **Stores/Configuration/Payment Methods/Credit Card (Stripe)**

___________________________________________________________________________________________________

### Screenshots:

--1--

<img src="https://i.ibb.co/n1fqVq3/Configuration-Settings.png" alt="Module Configuration" title="Module COnfiguration">

___________________________________________________________________________________________________

--2--

<img src="https://i.ibb.co/XCzPSQr/Selection-033.png" alt="Payment Form" title="Payment Form">

___________________________________________________________________________________________________

--3--

<img src="https://i.ibb.co/d6yThJ3/Selection-034.png" alt="Screenshot 2" title="Screenshot 3">

___________________________________________________________________________________________________

### The extension is free and always will be

## Additional Charges:
#### Installation: $ 20
#### Support: $ 40 /6 months

___________________________________________________________________________________________________
## Liked my work?

<a href="https://www.paypal.me/manishjoy" rel="nofollow"><img height="36" src="https://manishjoy.github.io/img/coffee-btn-image.png" border="0" alt="Buy Me a Coffee" data-canonical-src="https://manishjoy.github.io/img/coffee-btn-image.png" style="max-width:100%;"></a>

--- OR ---

<a href='https://www.patreon.com/manishjoy' target='_blank'><img src='https://i.ibb.co/rHdTFtj/patreon-btn.jpg' width='200' border='0' alt='SUPPORT ME ON PATREON' /></a>

___________________________________________________________________________________________________
## Prerequisites

### Use the following table to verify you have the correct prerequisites to install this Extension.
<table>
	<tbody>
		<tr>
			<th>Prerequisite</th>
			<th>How to check</th>
			<th>For more information</th>
		</tr>
	<tr>
		<td>Apache 2.2 or 2.4</td>
		<td>Ubuntu: <code>apache2 -v</code><br>
		CentOS: <code>httpd -v</code></td>
		<td><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/apache.html">Apache</a></td>
	</tr>
	<tr>
		<td>PHP 5.6.x, 7.1.x</td>
		<td><code>php -v</code></td>
		<td><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/php-ubuntu.html">PHP Ubuntu</a><br><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/php-centos.html">PHP CentOS</a></td>
	</tr>
	<tr><td>MySQL 5.6.x</td>
	<td><code>mysql -u [root user name] -p</code></td>
	<td><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/mysql.html">MySQL</a></td>
	</tr>
</tbody>
</table>

___________________________________________________________________________________________________
## Feedback and Support

 - <a href="https://www.manishjoy.com/">https://www.manishjoy.com</a>

 - <a href="mailto:support@manishjoy.com">support@manishjoy.com</a>

## Tutorials and Blogs

 - <a href="https://blog.manishjoy.com/">https://blog.manishjoy.com</a>

 - <a href="https://blog.manishjoy.com/magento-development-guide/">https://blog.manishjoy.com/magento-development-guide/</a>
