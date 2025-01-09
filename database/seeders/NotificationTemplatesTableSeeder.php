<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificationTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notification_templates')->delete();
        
        \DB::table('notification_templates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'act' => 'BAL_ADD',
                'name' => 'Balance - Added',
                'subj' => 'Your Account has been Credited',
            'email_body' => '<div><div style="font-family: Montserrat, sans-serif;">{{amount}} {{site_currency}} has been added to your account .</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><span style="color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;">Your Current Balance is :&nbsp;</span><font style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">{{post_balance}}&nbsp; {{site_currency}}&nbsp;</span></font><br></div><div><font style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></font></div><div>Admin note:&nbsp;<span style="color: rgb(33, 37, 41); font-size: 12px; font-weight: 600; white-space: nowrap; text-align: var(--bs-body-text-align);">{{remark}}</span></div>',
                'sms_body' => '{{amount}} {{site_currency}} credited in your account. Your Current Balance {{post_balance}} {{site_currency}} . Transaction: #{{trx}}. Admin note is "{{remark}}"',
                'shortcodes' => '{"trx":"Transaction number for the action","amount":"Amount inserted by the admin","remark":"Remark inserted by the admin","post_balance":"Balance of the user after this transaction"}',
                'email_status' => 1,
                'sms_status' => 0,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-09-21 18:34:13',
            ),
            1 => 
            array (
                'id' => 2,
                'act' => 'BAL_SUB',
                'name' => 'Balance - Subtracted',
                'subj' => 'Your Account has been Debited',
            'email_body' => '<div style="font-family: Montserrat, sans-serif;">{{amount}} {{site_currency}} has been subtracted from your account .</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><span style="color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;">Your Current Balance is :&nbsp;</span><font style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">{{post_balance}}&nbsp; {{site_currency}}</span></font><br><div><font style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></font></div><div>Admin Note: {{remark}}</div>',
                'sms_body' => '{{amount}} {{site_currency}} debited from your account. Your Current Balance {{post_balance}} {{site_currency}} . Transaction: #{{trx}}. Admin Note is {{remark}}',
                'shortcodes' => '{"trx":"Transaction number for the action","amount":"Amount inserted by the admin","remark":"Remark inserted by the admin","post_balance":"Balance of the user after this transaction"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-04-03 07:54:11',
            ),
            2 => 
            array (
                'id' => 3,
                'act' => 'DEPOSIT_COMPLETE',
                'name' => 'Deposit - Automated - Successful',
                'subj' => 'Deposit Completed Successfully',
                'email_body' => '<div>Your deposit of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>has been completed Successfully.<span style="font-weight: bolder;"><br></span></div><div><span style="font-weight: bolder;"><br></span></div><div><span style="font-weight: bolder;">Details of your Deposit :<br></span></div><div><br></div><div>Amount : {{amount}} {{site_currency}}</div><div>Charge:&nbsp;<font color="#000000">{{charge}} {{site_currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div>Received : {{method_amount}} {{method_currency}}<br></div><div>Paid via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><font size="5"><span style="font-weight: bolder;"><br></span></font></div><div><font size="5">Your current Balance is&nbsp;<span style="font-weight: bolder;">{{post_balance}} {{site_currency}}</span></font></div><div><br style="font-family: Montserrat, sans-serif;"></div>',
                'sms_body' => '{{amount}} {{site_currency}} Deposit successfully by {{method_name}}',
                'shortcodes' => '{"trx":"Transaction number for the deposit","amount":"Amount inserted by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the deposit method","method_currency":"Currency of the deposit method","method_amount":"Amount after conversion between base currency and method currency","post_balance":"Balance of the user after this transaction"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-04-03 07:55:43',
            ),
            3 => 
            array (
                'id' => 4,
                'act' => 'DEPOSIT_APPROVE',
                'name' => 'Deposit - Manual - Approved',
                'subj' => 'Your Deposit is Approved',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">Your deposit request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>is Approved .<span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">Details of your Deposit :<br></span></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Amount : {{amount}} {{site_currency}}</div><div style="font-family: Montserrat, sans-serif;">Charge:&nbsp;<font color="#FF0000">{{charge}} {{site_currency}}</font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style="font-family: Montserrat, sans-serif;">Received : {{method_amount}} {{method_currency}}<br></div><div style="font-family: Montserrat, sans-serif;">Paid via :&nbsp; {{method_name}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><font size="5"><span style="font-weight: bolder;"><br></span></font></div><div style="font-family: Montserrat, sans-serif;"><font size="5">Your current Balance is&nbsp;<span style="font-weight: bolder;">{{post_balance}} {{site_currency}}</span></font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br></div>',
                'sms_body' => 'Admin Approve Your {{amount}} {{site_currency}} payment request by {{method_name}} transaction : {{trx}}',
                'shortcodes' => '{"trx":"Transaction number for the deposit","amount":"Amount inserted by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the deposit method","method_currency":"Currency of the deposit method","method_amount":"Amount after conversion between base currency and method currency","post_balance":"Balance of the user after this transaction"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-04-03 07:56:07',
            ),
            4 => 
            array (
                'id' => 5,
                'act' => 'DEPOSIT_REJECT',
                'name' => 'Deposit - Manual - Rejected',
                'subj' => 'Your Deposit Request is Rejected',
            'email_body' => '<div style="font-family: Montserrat, sans-serif;">Your deposit request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}} has been rejected</span>.<span style="font-weight: bolder;"><br></span></div><div><br></div><div><br></div><div style="font-family: Montserrat, sans-serif;">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style="font-family: Montserrat, sans-serif;">Received : {{method_amount}} {{method_currency}}<br></div><div style="font-family: Montserrat, sans-serif;">Paid via :&nbsp; {{method_name}}</div><div style="font-family: Montserrat, sans-serif;">Charge: {{charge}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number was : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">if you have any queries, feel free to contact us.<br></div><br style="font-family: Montserrat, sans-serif;"><div style="font-family: Montserrat, sans-serif;"><br><br></div><span style="color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;">{{rejection_message}}</span><br>',
                'sms_body' => 'Admin Rejected Your {{amount}} {{site_currency}} payment request by {{method_name}}

{{rejection_message}}',
                'shortcodes' => '{"trx":"Transaction number for the deposit","amount":"Amount inserted by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the deposit method","method_currency":"Currency of the deposit method","method_amount":"Amount after conversion between base currency and method currency","rejection_message":"Rejection message by the admin"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-04-05 09:15:27',
            ),
            5 => 
            array (
                'id' => 6,
                'act' => 'DEPOSIT_REQUEST',
                'name' => 'Deposit - Manual - Requested',
                'subj' => 'Deposit Request Submitted Successfully',
                'email_body' => '<div>Your deposit request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>submitted successfully<span style="font-weight: bolder;">&nbsp;.<br></span></div><div><span style="font-weight: bolder;"><br></span></div><div><span style="font-weight: bolder;">Details of your Deposit :<br></span></div><div><br></div><div>Amount : {{amount}} {{site_currency}}</div><div>Charge:&nbsp;<font color="#FF0000">{{charge}} {{site_currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div>Payable : {{method_amount}} {{method_currency}}<br></div><div>Pay via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br></div><div><br style="font-family: Montserrat, sans-serif;"></div>',
                'sms_body' => '{{amount}} {{site_currency}} Deposit requested by {{method_name}}. Charge: {{charge}} . Trx: {{trx}}',
                'shortcodes' => '{"trx":"Transaction number for the deposit","amount":"Amount inserted by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the deposit method","method_currency":"Currency of the deposit method","method_amount":"Amount after conversion between base currency and method currency"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-04-03 07:59:19',
            ),
            6 => 
            array (
                'id' => 7,
                'act' => 'PASS_RESET_CODE',
                'name' => 'Password - Reset - Code',
                'subj' => 'Password Reset',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">We have received a request to reset the password for your account on&nbsp;<span style="font-weight: bolder;">{{time}} .<br></span></div><div style="font-family: Montserrat, sans-serif;">Requested From IP:&nbsp;<span style="font-weight: bolder;">{{ip}}</span>&nbsp;using&nbsp;<span style="font-weight: bolder;">{{browser}}</span>&nbsp;on&nbsp;<span style="font-weight: bolder;">{{operating_system}}&nbsp;</span>.</div><div style="font-family: Montserrat, sans-serif;"><br></div><br style="font-family: Montserrat, sans-serif;"><div style="font-family: Montserrat, sans-serif;"><div>Your account recovery code is:&nbsp;&nbsp;&nbsp;<font size="6"><span style="font-weight: bolder;">{{code}}</span></font></div><div><br></div></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><font size="4" color="#CC0000">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><div><font size="4" color="#CC0000"><br></font></div>',
                'sms_body' => 'Your account recovery code is: {{code}}',
                'shortcodes' => '{"code":"Verification code for password reset","ip":"IP address of the user","browser":"Browser of the user","operating_system":"Operating system of the user","time":"Time of the request"}',
                'email_status' => 1,
                'sms_status' => 0,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-03-21 02:17:05',
            ),
            7 => 
            array (
                'id' => 8,
                'act' => 'PASS_RESET_DONE',
                'name' => 'Password - Reset - Confirmation',
                'subj' => 'You have reset your password',
                'email_body' => '<p style="font-family: Montserrat, sans-serif;">You have successfully reset your password.</p><p style="font-family: Montserrat, sans-serif;">You changed from&nbsp; IP:&nbsp;<span style="font-weight: bolder;">{{ip}}</span>&nbsp;using&nbsp;<span style="font-weight: bolder;">{{browser}}</span>&nbsp;on&nbsp;<span style="font-weight: bolder;">{{operating_system}}&nbsp;</span>&nbsp;on&nbsp;<span style="font-weight: bolder;">{{time}}</span></p><p style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></p><p style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><font color="#ff0000">If you did not change that, please contact us as soon as possible.</font></span></p>',
                'sms_body' => 'Your password has been changed successfully',
                'shortcodes' => '{"ip":"IP address of the user","browser":"Browser of the user","operating_system":"Operating system of the user","time":"Time of the request"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-04-05 09:16:35',
            ),
            8 => 
            array (
                'id' => 9,
                'act' => 'ADMIN_SUPPORT_REPLY',
                'name' => 'Support - Reply',
                'subj' => 'Reply Support Ticket',
                'email_body' => '<div><p><span data-mce-style="font-size: 11pt;" style="font-size: 11pt;"><span style="font-weight: bolder;">A member from our support team has replied to the following ticket:</span></span></p><p><span style="font-weight: bolder;"><span data-mce-style="font-size: 11pt;" style="font-size: 11pt;"><span style="font-weight: bolder;"><br></span></span></span></p><p><span style="font-weight: bolder;">[Ticket#{{ticket_id}}] {{ticket_subject}}<br><br>Click here to reply:&nbsp; {{link}}</span></p><p>----------------------------------------------</p><p>Here is the reply :<br></p><p>{{reply}}<br></p></div><div><br style="font-family: Montserrat, sans-serif;"></div>',
                'sms_body' => 'Your Ticket#{{ticket_id}} :  {{ticket_subject}} has been replied.',
                'shortcodes' => '{"ticket_id":"ID of the support ticket","ticket_subject":"Subject  of the support ticket","reply":"Reply made by the admin","link":"URL to view the support ticket"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-03-21 02:17:51',
            ),
            9 => 
            array (
                'id' => 10,
                'act' => 'EVER_CODE',
                'name' => 'Verification - Email',
                'subj' => 'Please verify your email address',
                'email_body' => '<br><div><div style="font-family: Montserrat, sans-serif;">Thanks For joining us.<br></div><div style="font-family: Montserrat, sans-serif;">Please use the below code to verify your email address.<br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Your email verification code is:<font size="6"><span style="font-weight: bolder;">&nbsp;{{code}}</span></font></div></div>',
                'sms_body' => '---',
                'shortcodes' => '{"code":"Email verification code"}',
                'email_status' => 1,
                'sms_status' => 0,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-04-03 08:02:07',
            ),
            10 => 
            array (
                'id' => 11,
                'act' => 'SVER_CODE',
                'name' => 'Verification - SMS',
                'subj' => 'Verify Your Mobile Number',
                'email_body' => '---',
                'sms_body' => 'Your phone verification code is: {{code}}',
                'shortcodes' => '{"code":"SMS Verification Code"}',
                'email_status' => 0,
                'sms_status' => 1,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-03-21 00:54:37',
            ),
            11 => 
            array (
                'id' => 12,
                'act' => 'WITHDRAW_APPROVE',
                'name' => 'Withdraw - Approved',
                'subj' => 'Withdraw Request has been Processed and your money is sent',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">Your withdraw request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp; via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>has been Processed Successfully.<span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">Details of your withdraw:<br></span></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Amount : {{amount}} {{site_currency}}</div><div style="font-family: Montserrat, sans-serif;">Charge:&nbsp;<font color="#FF0000">{{charge}} {{site_currency}}</font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style="font-family: Montserrat, sans-serif;">You will get: {{method_amount}} {{method_currency}}<br></div><div style="font-family: Montserrat, sans-serif;">Via :&nbsp; {{method_name}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">-----</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><font size="4">Details of Processed Payment :</font></div><div style="font-family: Montserrat, sans-serif;"><font size="4"><span style="font-weight: bolder;">{{admin_details}}</span></font></div>',
                'sms_body' => 'Admin Approve Your {{amount}} {{site_currency}} withdraw request by {{method_name}}. Transaction {{trx}}',
                'shortcodes' => '{"trx":"Transaction number for the withdraw","amount":"Amount requested by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the withdraw method","method_currency":"Currency of the withdraw method","method_amount":"Amount after conversion between base currency and method currency","admin_details":"Details provided by the admin"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-03-21 02:20:16',
            ),
            12 => 
            array (
                'id' => 13,
                'act' => 'WITHDRAW_REJECT',
                'name' => 'Withdraw - Rejected',
                'subj' => 'Withdraw Request has been Rejected and your money is refunded to your account',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">Your withdraw request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp; via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>has been Rejected.<span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">Details of your withdraw:<br></span></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Amount : {{amount}} {{site_currency}}</div><div style="font-family: Montserrat, sans-serif;">Charge:&nbsp;<font color="#FF0000">{{charge}} {{site_currency}}</font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style="font-family: Montserrat, sans-serif;">You should get: {{method_amount}} {{method_currency}}<br></div><div style="font-family: Montserrat, sans-serif;">Via :&nbsp; {{method_name}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">----</div><div style="font-family: Montserrat, sans-serif;"><font size="3"><br></font></div><div style="font-family: Montserrat, sans-serif;"><font size="3">{{amount}} {{currency}} has been&nbsp;<span style="font-weight: bolder;">refunded&nbsp;</span>to your account and your current Balance is&nbsp;<span style="font-weight: bolder;">{{post_balance}}</span><span style="font-weight: bolder;">&nbsp;{{site_currency}}</span></font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">-----</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><font size="4">Details of Rejection :</font></div><div style="font-family: Montserrat, sans-serif;"><font size="4"><span style="font-weight: bolder;">{{admin_details}}</span></font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br><br><br><br><br></div><div></div><div></div>',
                'sms_body' => 'Admin Rejected Your {{amount}} {{site_currency}} withdraw request. Your Main Balance {{post_balance}}  {{method_name}} , Transaction {{trx}}',
                'shortcodes' => '{"trx":"Transaction number for the withdraw","amount":"Amount requested by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the withdraw method","method_currency":"Currency of the withdraw method","method_amount":"Amount after conversion between base currency and method currency","post_balance":"Balance of the user after fter this action","admin_details":"Rejection message by the admin"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-03-21 02:27:46',
            ),
            13 => 
            array (
                'id' => 14,
                'act' => 'WITHDRAW_REQUEST',
                'name' => 'Withdraw - Requested',
                'subj' => 'Withdraw Request Submitted Successfully',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">Your withdraw request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp; via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>has been submitted Successfully.<span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">Details of your withdraw:<br></span></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Amount : {{amount}} {{site_currency}}</div><div style="font-family: Montserrat, sans-serif;">Charge:&nbsp;<font color="#FF0000">{{charge}} {{site_currency}}</font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style="font-family: Montserrat, sans-serif;">You will get: {{method_amount}} {{method_currency}}<br></div><div style="font-family: Montserrat, sans-serif;">Via :&nbsp; {{method_name}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><font size="5">Your current Balance is&nbsp;<span style="font-weight: bolder;">{{post_balance}} {{site_currency}}</span></font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br><br><br></div>',
                'sms_body' => '{{amount}} {{site_currency}} withdraw requested by {{method_name}}. You will get {{method_amount}} {{method_currency}} Trx: {{trx}}',
                'shortcodes' => '{"trx":"Transaction number for the withdraw","amount":"Amount requested by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the withdraw method","method_currency":"Currency of the withdraw method","method_amount":"Amount after conversion between base currency and method currency","post_balance":"Balance of the user after fter this transaction"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2021-11-03 17:30:00',
                'updated_at' => '2022-03-21 10:09:03',
            ),
            14 => 
            array (
                'id' => 15,
                'act' => 'DEFAULT',
                'name' => 'Default Template',
                'subj' => '{{subject}}',
                'email_body' => '{{message}}',
                'sms_body' => '{{message}}',
                'shortcodes' => '{"subject":"Subject","message":"Message"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2021-11-04 15:08:55',
            ),
        ));
        
        
    }
}