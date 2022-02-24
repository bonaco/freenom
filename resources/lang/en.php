<?php
/**
 * 英文语言包
 *
 * @author mybsdc <mybsdc@gmail.com>
 * @date 2018/8/10
 * @time 14:39
 */

return [
    'exception_msg' => [
        '34520001' => 'It is detected that you have not configured your freenom account information, please change the account related items in the .env file, otherwise the program will not work properly',
        '34520002' => 'Error logging into freenom. Error message: %s',
        '34520003' => 'Domain data match failed, maybe you don\'t have a domain name or the page of freenom has changed causing the regular expression to fail, please contact the author promptly: https://github.com/luolongfei/freenom/issues',
        '34520004' => 'token match failed, may be the regular expression failed due to the page revision, please contact the author promptly: https://github.com/luolongfei/freenom/issues',
        '34520005' => 'The putenv() function is disabled and cannot write to environment variables, so the program does not work properly, please enable the putenv() function',
        '34520006' => 'The version of PHP is not allowed to be less than %s, the current version of PHP is %s, please upgrade your version of PHP, otherwise it will not work properly. If it is not convenient to upgrade PHP, we recommend using the Docker version of this project: https://hub.docker.com/r/luolongfei/freenom',
        '34520007' => sprintf('The .env configuration file is automatically generated in the %s directory, please change the contents of the configuration file to your own', ROOT_PATH),
        '34520008' => sprintf('Please copy the .env.example file in the %s directory to an .env file and change the contents of the .env file to your own', ROOT_PATH),
        '34520009' => 'Error getting domain status, probably not logged in or login is invalid, please try again',
        '34520010' => 'Missing curl module, can\'t send request, please check your php environment and add curl module at compile time',
        '34520012' => 'You have not configured an email address for incoming mail and may not receive mail. Please change the value corresponding to TO in the .env file to the email address you use most often to receive domain-related emails from the robot email address',
        '34520013' => 'Error getting domain status, error message: %s',
        '34520014' => 'No domain name found under your account %s (%s)',
    ],
    'messages' => [
        '100001' => 'The cookie value named WHMCSZH5eHTGhfvzP could not be obtained, so this login is not valid, please check if your account or password is correct',
        '100002' => 'Not allowed to send empty content emails',
        '100003' => 'Illegal message types',
        '100004' => "Execution error: \n",
        '100005' => 'Master, I just captured an anomaly',
        '100006' => 'Execution error: <red>%s</red>',
        '100007' => 'Cloud function executed successfully.',
        '100008' => 'Cloud function execution failed.',
        '100009' => 'Your runtime environment is a cloud function, all environment variables will be read directly from the environment, and those variables not found in the environment will be read directly from the .env.example file',
        '100010' => 'If it is in the Tencent cloud function, you can refer here to modify or add environment variables without rebuilding: https://github.com/luolongfei/freenom/blob/main/resources/screenshot/scf03.png',
        '100011' => 'If it is in Aliyun cloud function, you can directly edit the environment variable at [Function Details] -> [Function Configuration] -> [Environment Information]',
        '100012' => 'Because you did not turn on the upgrade alert feature, you will not be notified when a new version is available. Change the value of NEW_VERSION_DETECTION in the .env file to 1 to turn the feature back on.',
        '100013' => 'Your .env file is too old, the program will automatically update the relevant configuration items according to the .env.example file, don\'t panic, this operation will not have any effect on the existing data',
        '100014' => '<green>Backup of .env file completed</green>, old file location is %s/.env.old',
        '100015' => 'A new .env file has been generated',
        '100016' => '<green>Data migration complete</green>, %d environment variable data migrated',
        '100017' => '<green>Congratulations, .env file upgrade completed</green>',
        '100018' => 'Error upgrading .env file: ',
        '100019' => 'Error generating an .env file from an .env.example file',
        '100020' => 'Error when backing up .env file to .env.old file',
        '100021' => 'File does not exist: ',
        '100022' => 'Failed to read file content: ',
        '100023' => 'Github returns data inconsistent with expectations: ',
        '100024' => 'Detect upgrade error: ',
        '100025' => "Hello, on %s, we launched a new version of the Freenom renewal tool, v%s, and the version you are now using is v%s. You may decide whether to update to the new version according to your real needs. The following modifications or enhancements have been made in the new version: \n\n",
        '100026' => 'For more information, please visit: ',
        '100027' => '(This message will be delivered just once for the new releases. Set the value of NEW_VERSION_DETECTION in the .env file to 0 if you do not want to be alerted of new releases.)',
        '100028' => 'just now',
        '100029' => 'minutes ago',
        '100030' => 'hours ago',
        '100031' => 'yesterday ',
        '100032' => 'Error in conversion to human friendly time: ',
        '100033' => 'There is a new version of the FreeNom renewal tool available, your current version is v%s and the latest version is v%s. For more information about the new version, please visit: %s',
        '100034' => '<green>New versions of the FreeNom renewal tool are available, the latest version is v%s (%s)</green>',
        '100035' => 'Hi, there is a new version (v%s) of the FreeNom renewal tool available and a message has been sent to you about the new version',
        '100036' => 'Information about the new version has been sent to you, please check it.',
        '100037' => 'Upgrade error: ',
        '100038' => 'Version %s',
        '100039' => 'I\'ve recently renewed your domain names!',
        '100040' => 'Congratulations, successfully renewed <green>%d</green> domains, failed <green>%d</green> domains. %s',
        '100041' => 'A detailed renewal result message has been sent to you, please check it.',
        '100042' => "Account: %s\n Renewal results are as follows:\n",
        '100043' => 'Report, no domains need to be renewed today',
        '100044' => 'The current notification frequency is "only when there is a renewal operation", so no notification will be pushed this time',
        '100045' => '<bg_light_green>%s</bg_light_green>: <light_green>executed successfully, there are no domains that need to be renewed this time. </light_green>',
        '100046' => 'Renewal Request Error: %s, Domain ID: %s (Account: %s)',
        '100047' => 'Specifically, an exception was thrown at line %d of the %s file. The exception is %s, so go check it out. (Account: %s)',
        '100048' => 'Master, something went wrong: ',
        '100049' => 'A total of <light_cyan>%d</light_cyan> freenom accounts were found',
        '100050' => 'Start processing the <light_cyan>%s</light_cyan> freenom account: <bg_light_green>%s</bg_light_green> [%d/%d]',
        '100051' => 'Error: <red>%s</red>',
        '100052' => 'Error: <red>%s</red>',
        '100053' => 'An instance of the class named %s already exists',
        '100054' => 'Class named %s does not exist',
        '100055' => 'Since the "%s" feature is not enabled, the message will not be sent via "%s" this time, even though the relevant configuration is detected.',
        '100056' => 'The message service class %s must inherit and implement the MessageServiceInterface interface',
        '100057' => 'Unexpected program termination',
        '100058' => 'There may be an error, the error message collected is: ',
        '100059' => 'Master, the program was unexpectedly terminated',
        '100060' => 'Uncaught exceptions: ',
        '100061' => "The specific exception is: \n",
        '100062' => 'Master, Uncaught Exception',
        '100063' => 'Start executing Aliyun cloud functions',
        '100064' => 'Email',
        '100065' => 'Telegram Bot',
        '100066' => 'Corporate WeChat',
        '100067' => 'Server Chan',
        '100068' => 'Bark',
        '100069' => 'At present, Gmail, QQ mailbox, 163 mailbox and Outlook mailbox are supported for auto-identification configuration. For other types of mailboxes or self-built mailboxes, please append all relevant items of "custom mailbox configuration" in the .env file, otherwise you can\'t use mail service.',
        '100070' => 'No data.',
        '100071' => '<a href="http://%s" rel="noopener" target="_blank">%s</a> expires in <span style="font-weight: bold; font-size: 16px;">%d</span> days, ',
        '100072' => '.',
        '100073' => 'Master',
        '100074' => 'Project Author',
        '100075' => 'Renewal Success: %s<br>',
        '100076' => 'Renewal Error: %s<br>',
        '100077' => 'Mail sending failure: ',
        '100078' => "\nFor further information, please visit https://my.freenom.com/domains.php?a=renewals (click \"copy content\" to copy this URL)",
        '100079' => "\n\n(If you don't want to get a push every time you execute, adjust the value of NOTICE_FREQ in the .env file to 0 so that the application only pushes when there is a renewal operation.)",
        '100080' => "No data.\n",
        '100081' => '%s expires in %d days, ',
        '100082' => ".\n",
        '100083' => "The following is the renewal report for the Freenom Account %s:\n\n",
        '100084' => 'Renewal Success: ',
        '100085' => 'Renewal Error: ',
        '100086' => "\nIn addition, the following other domains' statuses are shown below:\n\n",
        '100087' => "I've just checked and found that the Freenom account %s does not have any domains that need to be renewed today. The following is the current state of all domains:\n\n",
        '100088' => 'Unknown reason',
        '100089' => 'Bark Failed to send message: <red>%s</red>',
        '100090' => "I've just checked and found that the Freenom account [%s](#) does not have any domains that need to be renewed today. The following is the current state of all domains:\n\n",
        '100091' => "\nFor more information, please visit [Freenom’s official website](https://my.freenom.com/domains.php?a=renewals)",
        '100092' => "\n\n(If you don't want to get a push every time you execute, adjust the value of NOTICE_FREQ in the .env file to 0 so that the application only pushes when there is a renewal operation.)",
        '100093' => "No data.\n",
        '100094' => '[%s](http://%s) expires in *%d* days, ',
        '100095' => ".\n",
        '100096' => "The following is the renewal report for the Freenom Account [%s](#):\n\n",
        '100097' => 'Renewal Success: ',
        '100098' => 'Renewal Error: ',
        '100099' => "\nIn addition, the following other domains' statuses are shown below:\n\n",
        '100100' => 'No known reason',
        '100101' => 'ServerChan Failed to send message: <red>%s</red>',
        '100102' => "I've just checked and found that the Freenom account %s does not have any domains that need to be renewed today. The following is the current state of all domains:\n\n",
        '100103' => "\nFor further information, please visit [Freenom’s official website](https://my.freenom.com/domains.php?a=renewals)",
        '100104' => "\n\n(If you don't want to get a push every time you execute, adjust the value of NOTICE_FREQ in the .env file to 0 so that the application only pushes when there is a renewal operation.)",
        '100105' => "No data.\n",
        '100106' => '[%s](http://%s) expires in *%d* days, ',
        '100107' => ".\n",
        '100108' => "The following is the renewal report for the Freenom Account %s:\n\n",
        '100109' => 'Renewal Success: ',
        '100110' => 'Renewal Error: ',
        '100111' => "\nIn addition, the following other domains' statuses are shown below:\n\n",
        '100112' => 'Telegram failed to send a message: <red>%s</red>',
        '100113' => 'Corporate WeChat access_token write failure: ',
        '100114' => 'Get Corporate WeChat access_token Failed: ',
        '100115' => 'No known reason',
        '100116' => "\nFor further information, please visit <a href=\"https://my.freenom.com/domains.php?a=renewals\">Freenom’s official website</a>",
        '100117' => "\n\n(If you don't want to get a push every time you execute, adjust the value of NOTICE_FREQ in the .env file to 0 so that the application only pushes when there is a renewal operation.)",
        '100118' => "No data.\n",
        '100119' => '<a href="http://%s">%s</a> expires in <a href="http://%s">%d</a> days, ',
        '100120' => ".\n",
        '100121' => "The following is the renewal report for the Freenom Account <a href=\"https://www.google.com\">%s</a>:\n\n",
        '100122' => 'Renewal Success: ',
        '100123' => 'Renewal Error: ',
        '100124' => "\nIn addition, the following other domains' statuses are shown below:\n\n",
        '100125' => "I've just checked and found that the Freenom account <a href=\"https://www.google.com\">%s</a> does not have any domains that need to be renewed today. The following is the current state of all domains:\n\n",
        '100126' => 'Corporate WeChat failed to send a message: <red>%s</red>',
        '100127' => 'Corporate WeChat interface did not return the expected data response, this response data is: ',
        '100128' => 'Multiple invalid access_token prompts have been detected, possibly because the access_token was not properly obtained, please intervene to investigate: ',
        '100129' => 'Warning: <light_yellow>%s</light_yellow>',
    ],
];
