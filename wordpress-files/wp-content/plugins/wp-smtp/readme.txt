=== WP SMTP ===
Contributors: yehudah
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=yehuda@myinbox.in&item_name=Donation+for+WPSMTP
Tags: wp smtp,smtp,mail,email,logs,mailer,wp mail,gmail,yahoo,mail smtp,ssl,tls
License: GPLv2
Requires at least: 2.7
Tested up to: 5.5
Stable tag: 1.2.1

WP SMTP & Email logger can help us to send emails via SMTP instead of the PHP mail() function.

== Description ==

WP SMTP & Email Log, can help us to send emails via SMTP instead of the PHP mail() function.
It fixes your email deliverability by reconfiguring WordPress to use a proper SMTP provider when sending emails, and keep an
**Email log** so you can know when your emails are failing to deliver and why.


= Do you want more advanced SMTP mailer? =

* Built-in **importer for WP SMTP settings**.
* Universal SMTP for every service.
* SMTP ports are blocked? API support - A method for sending emails via HTTP for Gmail, Sendgrid, Mailgun, and Mandrill.
* Credentials can be configured inside wp-config.php insted of the DB.
* Built-in mail logger with the option to resend and filter.
* Built-in alert function when emails are faling, you can get notified by Email, Slack or pushover.
* Ports checker for any blocking issue.

Check Post SMTP:
[https://wordpress.org/plugins/post-smtp/](https://wordpress.org/plugins/post-smtp/)

= CREDITS =

WP SMTP plugin was originally created by BoLiQuan. It is now owned and maintained by Yehuda Hassine.

= Usage =

1. Download and extract `wp-smtp.zip` to `wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. "Dashboard"->"Settings"->"WP SMTP"
4. For more information of this plugin, please visit: [Plugin Homepage](https://wpsmtpmail.com/ "WP SMTP").

== Installation ==

1. Download and extract `wp-smtp.zip` to `wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. "Dashboard"->"Settings"->"WP SMTP"
4. For more information of this plugin, please visit: [Plugin Homepage](https://wpsmtpmail.com/ "WP SMTP").

== Changelog ==

= 1.2 =
Fixed: handle the mail parts as needed

= 1.2 =
New and shiny mail logger.

= 1.1.11 =
All good, still maintained, just update some info

= 1.1.10 =

New maintainer - yehudah
https://wpsmtpmail.com/v1-1-10-wp-smtp-is-back/

* Code structure and organize.
* Credentials can now be configured inside wp-config.php

= 1.1.9 =

* Some optimization

= 1.1.7 =

* Using a nonce to increase security.

= 1.1.6 =

* Add Yahoo! example
* Some optimization

= 1.1.5 =

* Some optimization

= 1.1.4 =

* If the field "From" was not a valid email address, or the field "Host" was left blank, it will not reconfigure the wp_mail() function.
* Add some reminders.

= 1.1.3 =

* If "SMTP Authentication" was set to no, the values "Username""Password" are ignored.

= 1.1.2 =

* First release.


== Screenshots ==

1. Main settings
2. Test settings
3. Mail Logs
4. Collapse to show mail body
5. Select rows to delete


== Frequently Asked Questions ==

= What is the different between this and Post SMTP =

WP SMTP is more SMTP delivery focus and has less features:

* If you don't want or need to use API.
* No failed mails notifications.
* No fallback server.

For any other question you can submit it in https://wordpress.org/support/plugin/wp-smtp,
if It's urgent like a bug submit it here: https://wpsmtpmail.com/contact/


