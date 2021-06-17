<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MailController extends Controller
{
    /**
     *  发送邮件
     * @param Request $request
     * @return int
     */
    public function send(Request $request): array
    {
        $email = $request->post("email");
        $myEmail = 'helloworlddev@163.com'; // 账号
        // smtp 地址
        $transport = (new \Swift_SmtpTransport('smtp.163.com', 25))
            ->setUsername($myEmail)
            ->setPassword('YSPHALPWNDBNLBII'); // 授权密码不一定是密码
        $mailer = new \Swift_Mailer($transport);
        $message = (new \Swift_Message('邮件标题'))
            ->setFrom([$myEmail => '我的名字'])
            ->setTo([$email])
            ->setBody('测试内容');
        $result = $mailer->send($message);
        if ($result === 1 ) {
            // todo 处理成功
            return ["isSuccess" => true];
        } else {
            // todo 处理失败
            return ["isSuccess" => false];
        }
    }
}
