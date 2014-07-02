<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-06-10 10:53:08 +07:00 --- error: An exception occured exception 'Swift_ConnectionException' with message 'Sending failed using mail() as PHP's default mail() function returned boolean FALSE.' in /var/www/matamassa/pileg2014/system/vendor/swift/Swift/Plugin/MailSend.php:169
Stack trace:
#0 /var/www/matamassa/pileg2014/system/vendor/swift/Swift/Plugin/MailSend.php(149): Swift_Plugin_MailSend->doMail('admin@matamassa...', '=?UTF-8?B?W01hd...', 'A new email mes...', Object(Swift_Message_Headers), '')
#1 /var/www/matamassa/pileg2014/system/vendor/swift/Swift.php(171): Swift_Plugin_MailSend->sendPerformed(Object(Swift_Events_SendEvent))
#2 /var/www/matamassa/pileg2014/system/vendor/swift/Swift.php(462): Swift->notifyListeners(Object(Swift_Events_SendEvent), 'SendListener')
#3 /var/www/matamassa/pileg2014/system/helpers/email.php(178): Swift->send(Object(Swift_Message), Object(Swift_Address), Object(Swift_Address))
#4 /var/www/matamassa/pileg2014/application/helpers/notifications.php(32): email_Core::send('admin@matamassa...', Array, '[MataMassa] New...', 'A new email mes...', false)
#5 /var/www/matamassa/pileg2014/application/controllers/scheduler/s_email.php(206): notifications_Core->notify_admins('[MataMassa] New...', 'A new email mes...')
#6 /var/www/matamassa/pileg2014/application/controllers/scheduler/s_email.php(48): S_Email_Controller->add_email(Array)
#7 /var/www/matamassa/pileg2014/application/libraries/Dispatch.php(125): S_Email_Controller->index('')
#8 /var/www/matamassa/pileg2014/application/controllers/scheduler.php(133): Dispatch_Core->method('index', '')
#9 [internal function]: Scheduler_Controller->index()
#10 /var/www/matamassa/pileg2014/system/core/Kohana.php(277): ReflectionMethod->invokeArgs(Object(Scheduler_Controller), Array)
#11 [internal function]: Kohana::instance()
#12 /var/www/matamassa/pileg2014/system/core/Event.php(209): call_user_func(Array)
#13 /var/www/matamassa/pileg2014/system/core/Bootstrap.php(55): Event::run('system.execute')
#14 /var/www/matamassa/pileg2014/index.php(174): require('/var/www/matama...')
#15 {main}
2014-06-10 10:53:08 +07:00 --- error: An exception occured exception 'Swift_ConnectionException' with message 'Sending failed using mail() as PHP's default mail() function returned boolean FALSE.' in /var/www/matamassa/pileg2014/system/vendor/swift/Swift/Plugin/MailSend.php:169
Stack trace:
#0 /var/www/matamassa/pileg2014/system/vendor/swift/Swift/Plugin/MailSend.php(149): Swift_Plugin_MailSend->doMail('admin@matamassa...', '=?UTF-8?B?W01hd...', 'A new email mes...', Object(Swift_Message_Headers), '')
#1 /var/www/matamassa/pileg2014/system/vendor/swift/Swift.php(171): Swift_Plugin_MailSend->sendPerformed(Object(Swift_Events_SendEvent))
#2 /var/www/matamassa/pileg2014/system/vendor/swift/Swift.php(462): Swift->notifyListeners(Object(Swift_Events_SendEvent), 'SendListener')
#3 /var/www/matamassa/pileg2014/system/helpers/email.php(178): Swift->send(Object(Swift_Message), Object(Swift_Address), Object(Swift_Address))
#4 /var/www/matamassa/pileg2014/application/helpers/notifications.php(32): email_Core::send('admin@matamassa...', Array, '[MataMassa] New...', 'A new email mes...', false)
#5 /var/www/matamassa/pileg2014/application/controllers/scheduler/s_email.php(206): notifications_Core->notify_admins('[MataMassa] New...', 'A new email mes...')
#6 /var/www/matamassa/pileg2014/application/controllers/scheduler/s_email.php(48): S_Email_Controller->add_email(Array)
#7 /var/www/matamassa/pileg2014/application/libraries/Dispatch.php(125): S_Email_Controller->index('')
#8 /var/www/matamassa/pileg2014/application/controllers/scheduler.php(133): Dispatch_Core->method('index', '')
#9 [internal function]: Scheduler_Controller->index()
#10 /var/www/matamassa/pileg2014/system/core/Kohana.php(277): ReflectionMethod->invokeArgs(Object(Scheduler_Controller), Array)
#11 [internal function]: Kohana::instance()
#12 /var/www/matamassa/pileg2014/system/core/Event.php(209): call_user_func(Array)
#13 /var/www/matamassa/pileg2014/system/core/Bootstrap.php(55): Event::run('system.execute')
#14 /var/www/matamassa/pileg2014/index.php(174): require('/var/www/matama...')
#15 {main}
2014-06-10 13:58:06 +07:00 --- error: An exception occured exception 'Swift_ConnectionException' with message 'Sending failed using mail() as PHP's default mail() function returned boolean FALSE.' in /var/www/matamassa/pileg2014/system/vendor/swift/Swift/Plugin/MailSend.php:169
Stack trace:
#0 /var/www/matamassa/pileg2014/system/vendor/swift/Swift/Plugin/MailSend.php(149): Swift_Plugin_MailSend->doMail('admin@matamassa...', '=?UTF-8?B?W01hd...', 'A new email mes...', Object(Swift_Message_Headers), '')
#1 /var/www/matamassa/pileg2014/system/vendor/swift/Swift.php(171): Swift_Plugin_MailSend->sendPerformed(Object(Swift_Events_SendEvent))
#2 /var/www/matamassa/pileg2014/system/vendor/swift/Swift.php(462): Swift->notifyListeners(Object(Swift_Events_SendEvent), 'SendListener')
#3 /var/www/matamassa/pileg2014/system/helpers/email.php(178): Swift->send(Object(Swift_Message), Object(Swift_Address), Object(Swift_Address))
#4 /var/www/matamassa/pileg2014/application/helpers/notifications.php(32): email_Core::send('admin@matamassa...', Array, '[MataMassa] New...', 'A new email mes...', false)
#5 /var/www/matamassa/pileg2014/application/controllers/scheduler/s_email.php(206): notifications_Core->notify_admins('[MataMassa] New...', 'A new email mes...')
#6 /var/www/matamassa/pileg2014/application/controllers/scheduler/s_email.php(48): S_Email_Controller->add_email(Array)
#7 /var/www/matamassa/pileg2014/application/libraries/Dispatch.php(125): S_Email_Controller->index('')
#8 /var/www/matamassa/pileg2014/application/controllers/scheduler.php(133): Dispatch_Core->method('index', '')
#9 [internal function]: Scheduler_Controller->index()
#10 /var/www/matamassa/pileg2014/system/core/Kohana.php(277): ReflectionMethod->invokeArgs(Object(Scheduler_Controller), Array)
#11 [internal function]: Kohana::instance()
#12 /var/www/matamassa/pileg2014/system/core/Event.php(209): call_user_func(Array)
#13 /var/www/matamassa/pileg2014/system/core/Bootstrap.php(55): Event::run('system.execute')
#14 /var/www/matamassa/pileg2014/index.php(174): require('/var/www/matama...')
#15 {main}
2014-06-10 21:49:00 +07:00 --- error: core.uncaught_exception
