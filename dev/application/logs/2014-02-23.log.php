<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-02-23 10:19:53 +07:00 --- error: An exception occured exception 'Swift_ConnectionException' with message 'Sending failed using mail() as PHP's default mail() function returned boolean FALSE.' in /var/www/matamassa/system/vendor/swift/Swift/Plugin/MailSend.php:169
Stack trace:
#0 /var/www/matamassa/system/vendor/swift/Swift/Plugin/MailSend.php(149): Swift_Plugin_MailSend->doMail('admin@matamassa...', '=?UTF-8?B?W01hd...', 'A new text mess...', Object(Swift_Message_Headers), '')
#1 /var/www/matamassa/system/vendor/swift/Swift.php(171): Swift_Plugin_MailSend->sendPerformed(Object(Swift_Events_SendEvent))
#2 /var/www/matamassa/system/vendor/swift/Swift.php(462): Swift->notifyListeners(Object(Swift_Events_SendEvent), 'SendListener')
#3 /var/www/matamassa/system/helpers/email.php(178): Swift->send(Object(Swift_Message), Object(Swift_Address), Object(Swift_Address))
#4 /var/www/matamassa/application/helpers/notifications.php(32): email_Core::send('admin@matamassa...', Array, '[MataMassa] New...', 'A new text mess...', false)
#5 /var/www/matamassa/application/helpers/sms.php(133): notifications_Core::notify_admins('[MataMassa] New...', 'A new text mess...')
#6 /var/www/matamassa/plugins/frontlinesms/controllers/frontlinesms.php(48): sms_Core::add('628979680526', 'Virdika Rizky U...')
#7 [internal function]: Frontlinesms_Controller->index()
#8 /var/www/matamassa/system/core/Kohana.php(277): ReflectionMethod->invokeArgs(Object(Frontlinesms_Controller), Array)
#9 [internal function]: Kohana::instance()
#10 /var/www/matamassa/system/core/Event.php(209): call_user_func(Array)
#11 /var/www/matamassa/system/core/Bootstrap.php(55): Event::run('system.execute')
#12 /var/www/matamassa/index.php(174): require('/var/www/matama...')
#13 {main}
2014-02-23 12:49:22 +07:00 --- error: An exception occured exception 'Swift_ConnectionException' with message 'Sending failed using mail() as PHP's default mail() function returned boolean FALSE.' in /var/www/matamassa/system/vendor/swift/Swift/Plugin/MailSend.php:169
Stack trace:
#0 /var/www/matamassa/system/vendor/swift/Swift/Plugin/MailSend.php(149): Swift_Plugin_MailSend->doMail('admin@matamassa...', '=?UTF-8?B?W01hd...', 'A new text mess...', Object(Swift_Message_Headers), '')
#1 /var/www/matamassa/system/vendor/swift/Swift.php(171): Swift_Plugin_MailSend->sendPerformed(Object(Swift_Events_SendEvent))
#2 /var/www/matamassa/system/vendor/swift/Swift.php(462): Swift->notifyListeners(Object(Swift_Events_SendEvent), 'SendListener')
#3 /var/www/matamassa/system/helpers/email.php(178): Swift->send(Object(Swift_Message), Object(Swift_Address), Object(Swift_Address))
#4 /var/www/matamassa/application/helpers/notifications.php(32): email_Core::send('admin@matamassa...', Array, '[MataMassa] New...', 'A new text mess...', false)
#5 /var/www/matamassa/application/helpers/sms.php(133): notifications_Core::notify_admins('[MataMassa] New...', 'A new text mess...')
#6 /var/www/matamassa/plugins/frontlinesms/controllers/frontlinesms.php(48): sms_Core::add('622198602475', 'dadang suherman...')
#7 [internal function]: Frontlinesms_Controller->index()
#8 /var/www/matamassa/system/core/Kohana.php(277): ReflectionMethod->invokeArgs(Object(Frontlinesms_Controller), Array)
#9 [internal function]: Kohana::instance()
#10 /var/www/matamassa/system/core/Event.php(209): call_user_func(Array)
#11 /var/www/matamassa/system/core/Bootstrap.php(55): Event::run('system.execute')
#12 /var/www/matamassa/index.php(174): require('/var/www/matama...')
#13 {main}
2014-02-23 16:24:38 +07:00 --- error: An exception occured exception 'Swift_ConnectionException' with message 'Sending failed using mail() as PHP's default mail() function returned boolean FALSE.' in /var/www/matamassa/system/vendor/swift/Swift/Plugin/MailSend.php:169
Stack trace:
#0 /var/www/matamassa/system/vendor/swift/Swift/Plugin/MailSend.php(149): Swift_Plugin_MailSend->doMail('admin@matamassa...', '=?UTF-8?B?W01hd...', 'A new email mes...', Object(Swift_Message_Headers), '')
#1 /var/www/matamassa/system/vendor/swift/Swift.php(171): Swift_Plugin_MailSend->sendPerformed(Object(Swift_Events_SendEvent))
#2 /var/www/matamassa/system/vendor/swift/Swift.php(462): Swift->notifyListeners(Object(Swift_Events_SendEvent), 'SendListener')
#3 /var/www/matamassa/system/helpers/email.php(178): Swift->send(Object(Swift_Message), Object(Swift_Address), Object(Swift_Address))
#4 /var/www/matamassa/application/helpers/notifications.php(32): email_Core::send('admin@matamassa...', Array, '[MataMassa] New...', 'A new email mes...', false)
#5 /var/www/matamassa/application/controllers/scheduler/s_email.php(206): notifications_Core->notify_admins('[MataMassa] New...', 'A new email mes...')
#6 /var/www/matamassa/application/controllers/scheduler/s_email.php(48): S_Email_Controller->add_email(Array)
#7 /var/www/matamassa/application/libraries/Dispatch.php(125): S_Email_Controller->index('')
#8 /var/www/matamassa/application/controllers/scheduler.php(133): Dispatch_Core->method('index', '')
#9 [internal function]: Scheduler_Controller->index()
#10 /var/www/matamassa/system/core/Kohana.php(277): ReflectionMethod->invokeArgs(Object(Scheduler_Controller), Array)
#11 [internal function]: Kohana::instance()
#12 /var/www/matamassa/system/core/Event.php(209): call_user_func(Array)
#13 /var/www/matamassa/system/core/Bootstrap.php(55): Event::run('system.execute')
#14 /var/www/matamassa/index.php(174): require('/var/www/matama...')
#15 {main}
